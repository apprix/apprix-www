# Deployment

## Yleiskuva

Julkaisu tapahtuu automaattisesti GitHub Actionsin kautta. Push `main`-branchiin laukaisee deployn Hetzner-palvelimelle.

```
Push main → GitHub Actions → Build (Composer + Vite) → Deployer → Palvelin
```

Deployer tekee zero-downtime deployn: koodi uploadataan uuteen release-hakemistoon ja `current`-symlink vaihdetaan atomisesti. Sivusto ei katkea deployn aikana.

BOT-commitit (Statamic CP:n automaattiset git-commitit) ohitetaan GitHub Actionsissa — ne eivät laukaise uutta deployä.

---

## Palvelin

| | |
|---|---|
| **IP** | 62.238.10.202 |
| **Hostname** | apprix-www |
| **OS** | Ubuntu 24.04 LTS |
| **PHP** | 8.4 (php8.4-fpm) |
| **Web** | Nginx |
| **Hetzner-projekti** | [143018](https://console.hetzner.cloud/projects/143018/servers/126819258/overview) |
| **Domain (nyt)** | www3.apprix.fi (SSL aktiivinen) |
| **SSH** | `ssh tomih@62.238.10.202` tai `ssh root@62.238.10.202` |

---

## GitHub Actions -pipeline

Tiedosto: `.github/workflows/deploy.yml`

### Vaiheet

1. **Checkout** — kloonaa repon (sisältäen `.git`-hakemiston)
2. **Setup PHP 8.4** — asentaa PHP:n
3. **Composer install** — asentaa PHP-riippuvuudet **ennen** Node-buildia (pakollinen, Tailwind 4 skannaa vendor-kansion)
4. **Setup Node.js 20** — asentaa Noden
5. **npm ci + npm run build** — buildaa CSS/JS Vitellä
6. **Deployer** — uploadaa koodin palvelimelle SSH:lla, asentaa vendorit, vaihtaa symlinkin

### Trigger

- **Automaattinen:** push `main`-branchiin
- **Manuaalinen:** GitHub Actions -sivulta "Re-run all jobs"
- **Ohitetaan** jos commit-viesti sisältää `[BOT]` (Statamic CP:n automaattiset commitit)

---

## Deployer (deploy.php)

[Deployer](https://deployer.org/) 7.5.12 hoitaa varsinaisen julkaisun palvelimelle.

### Mitä Deployer tekee

1. SSH-yhteys palvelimelle käyttäjänä `deploy`
2. **Uploadaa koodin** suoraan GitHub Actions -runnerista palvelimelle (ei server-side git clonea)
   - Mukana `.git`-hakemisto Statamic Git -integraatiota varten
   - Vaihtaa git-remoten HTTPS:stä SSH:ksi (tarvitaan Statamic Git -pushuille)
   - Poistaa actions/checkout-tokenin git-configista
3. Konfiguroi git-identiteetin (`statamic@apprix.fi`) ja asettaa ACL-oikeudet www-datalle
4. Linkittää shared-tiedostot (`.env`, `database.sqlite`, `storage/`, `public/assets/`, `public/files/`)
5. Asettaa ACL-oikeudet shared-hakemistoihin
6. Ajaa `composer install --no-dev` palvelimella
7. Uploadaa buildatut frontend-assetit (`public/build/`)
8. Synkkaa repo-assetit (kuvat, videot) shared `public/assets/`-kansioon
9. Ajaa `artisan config:cache` ja `route:cache`
10. Ajaa `statamic:stache:warm` ja `statamic:search:update`
11. Vaihtaa `current`-symlinkin uuteen releaseen
12. Siivoa vanhimmat releaset (max 5 säilytetään)

### Miksi upload eikä git clone palvelimella?

Aiemmin deploy teki `git clone` suoraan palvelimelta GitHubiin, mutta tämä aiheutti SSH-yhteyden timeout-ongelmia (~4 min) Deployerin mux-yhteyden jäädessä lepotilaan kloonauksen ajaksi. Nyt koodi uploadataan suoraan runnerista, jolla se on jo valmiiksi checkattuna — nopeampi ja luotettavampi.

### Hakemistorakenne palvelimella

```
/var/www/apprix-www/
├── current -> releases/N          ← Nginx osoittaa tähän
├── releases/
│   ├── N-4/
│   ├── N-3/
│   ├── N-2/
│   ├── N-1/
│   └── N/                         ← aktiivinen release
└── shared/
    ├── .env                        ← tuotannon ympäristömuuttujat
    ├── git-wrapper.sh              ← Statamic Git -autentikaatioskripti
    ├── .statamic-git-deploy-key    ← SSH-avain GitHub-pushuille (Statamic Git)
    ├── .gitconfig                  ← git-konfiguraatio Statamic Gitille
    ├── database/
    │   └── database.sqlite         ← tietokanta (ei ylikirjoiteta deployssa)
    ├── storage/                    ← logit, cache, sessiot, lomakelähetykset
    ├── public/
    │   ├── assets/                 ← Statamic CP:n kautta uploadatut tiedostot
    │   └── files/                  ← dokumentit ja tiedostot (docs-kokoelma)
```

### Rollback

```bash
dep rollback production
```

---

## Statamic Git -integraatio

Statamic Git on **aktiivinen** tuotannossa. Se commitoi ja pushaa automaattisesti GitHubiin aina kun sisältöä muokataan hallintapaneelissa.

### Miten toimii

1. Käyttäjä tallentaa sisältöä `/hallinta`-paneelissa
2. Statamic ajaa `git add` + `git commit` release-hakemistossa
3. Commit-viestiin lisätään `[BOT]`-tunniste
4. `git push` lähettää muutoksen GitHubiin
5. GitHub Actions havaitsee `[BOT]`-viestin ja ohittaa deployn → ei loop

### Autentikaatio GitHubiin

Statamic käyttää `git-wrapper.sh`-skriptiä (`STATAMIC_GIT_BINARY` .env:ssä), joka:
- Kopioi `.statamic-git-deploy-key`-avaimen väliaikaistiedostoon oikeilla oikeuksilla
- Asettaa `GIT_SSH_COMMAND`:n viittaamaan siihen
- Ajaa git-komennon ja siivoaa väliaikaistiedoston

### Seuratut polut (auto-commitoidaan)

- `content/` — kaikki sisältö (sivut, artikkelit, FAQ, docs)
- `users/` — käyttäjätiedostot
- `resources/blueprints/` — kenttärakenteet
- `resources/forms/` — lomakemäärittelyt
- `public/images/`, `public/favicons/`, `public/social_images/` — julkiset kuvat

---

## Salaisuudet ja tunnukset

### GitHub Secrets (repo: apprix/apprix-www)

| Secret | Kuvaus |
|---|---|
| `SSH_PRIVATE_KEY` | Ed25519 yksityinen avain jolla GitHub Actions kirjautuu palvelimelle `deploy`-käyttäjänä |

Hallinta: https://github.com/apprix/apprix-www/settings/secrets/actions

### GitHub Deploy Keys (repo: apprix/apprix-www)

| Nimi | Tarkoitus | Oikeudet |
|---|---|---|
| `apprix-www-server` | Palvelimen `deploy`-käyttäjä → GitHub (vanha clone-avain) | Read-only |
| `statamic-git` | Statamic Git -integraatio → GitHub push | Read+Write |

Hallinta: https://github.com/apprix/apprix-www/settings/keys

### Palvelimen .env

Sijainti: `/var/www/apprix-www/shared/.env`

Tärkeimmät muuttujat:

| Muuttuja | Tila | Huom |
|---|---|---|
| `APP_URL` | `https://www3.apprix.fi` | Päivitettävä domain-siirron yhteydessä |
| `APP_KEY` | Asetettu | Älä koskaan vaihda |
| `STATAMIC_LICENSE_KEY` | Asetettu | Pro-lisenssi aktiivinen |
| `STATAMIC_GIT_ENABLED` | `true` | Auto-commit käytössä |
| `STATAMIC_GIT_PUSH` | `true` | Auto-push käytössä |
| `STATAMIC_GIT_BINARY` | Asetettu | Osoittaa `git-wrapper.sh`:iin |
| `MAIL_MAILER` | `smtp` | Resend |
| `MAIL_HOST` | `smtp.resend.com` | |
| `MAIL_PASSWORD` | Asetettu | Resend API-avain |
| `MAIL_FROM_ADDRESS` | `info@apprix.fi` | |
| `CP_ROUTE` | `hallinta` | CP-osoite: `/hallinta` |

Sisältää myös APP_KEY, MAIL_PASSWORD, STATAMIC_LICENSE_KEY. Ei koskaan versionhallinnassa.

### Basic Auth (väliaikainen, ennen julkaisua)

Nginx basic auth suojaa sivuston kehitysvaiheen ajan:
- Käyttäjä: `apprix`
- Salasana: `Appr1x2026!`
- Tiedosto palvelimella: `/etc/nginx/.htpasswd`

Salasanan vaihto:
```bash
ssh root@62.238.10.202 "htpasswd -b /etc/nginx/.htpasswd apprix UUSI_SALASANA"
```

Basic auth **poistetaan** ennen julkaisua (kommentoi `auth_basic`-rivit Nginx-konfiguraatiosta).

### SSH-avaimet

| Avain | Sijainti | Tarkoitus |
|---|---|---|
| `id_ed25519` | `~/.ssh/id_ed25519` (kehittäjän kone) | SSH-pääsy palvelimelle (tomih/root) |
| `SSH_PRIVATE_KEY` | GitHub Secret | GitHub Actions → palvelin (deploy-käyttäjä) |
| `.statamic-git-deploy-key` | `/var/www/apprix-www/shared/` (palvelin) | Statamic Git → GitHub push |

### SSL-sertifikaatti

Let's Encrypt (Certbot) — uusitaan automaattisesti.
- Sertifikaatti: `/etc/letsencrypt/live/www3.apprix.fi/`
- Certbot-timer tarkistaa uusinnan automaattisesti

---

## Sähköposti (Resend)

Sivusto käyttää [Resend](https://resend.com)-palvelua sähköpostien lähettämiseen.

- **Lähettäjädomain:** `apprix.fi` (verifioitu Resendissä)
- **From-osoite:** `myynti@apprix.fi`
- **Yhteydenottolomakkeet:** lähettävät kahdelle osapuolelle:
  - **Vastaanottaja (myynti):** `myynti@apprix.fi` — ilmoitus uudesta yhteydenotosta
  - **Lähettäjä (asiakas):** asiakkaan antama sähköposti — automaattinen kuittaus

---

## Käyttäjät ja roolit (/hallinta)

Hallintapaneeli löytyy osoitteesta: `https://www3.apprix.fi/hallinta`

### Roolit

| Rooli | Mitä voi tehdä |
|---|---|
| **Super Admin** | Kaikki — tekninen ylläpito |
| **Editor** | Muokkaa sivuja, sisältöä, kuvia, näkee lomakelähetykset |
| **Marketer** | SEO-asetukset ja uudelleenohjaukset |
| **User management** | Käyttäjien hallinta |
| **Form editor** | Lomakkeiden kenttien muokkaus |

### Tärkeä huomio rooleihin

Statamic Pro -lisenssi on rekisteröity `apprix.fi`-domainiin, mutta palvelin pyörii tällä hetkellä `www3.apprix.fi`-domainilla. Tämä domain-ero estää custom-roolien näkymisen käyttäjien luontilomakkeessa — **vain Super Admin näkyy vaihtoehtona**. Ongelma korjaantuu automaattisesti kun domain vaihdetaan `apprix.fi`:ksi ja `APP_URL` päivitetään.

---

## DNS

Nimipalvelimet: Hetzner DNS (helium.ns.hetzner.de, oxygen.ns.hetzner.com, hydrogen.ns.hetzner.com)

DNS-hallinta: https://dns.hetzner.com

| Domain | Osoite | Tila |
|---|---|---|
| www3.apprix.fi | 62.238.10.202 | Aktiivinen, SSL ✅ |
| apprix.fi | 95.216.201.18 | Vanha palvelin |
| www.apprix.fi | 95.216.201.18 | Vanha palvelin |

### Domain-siirto (kun aika tulee)

TTL:n lyhentäminen ennen muutoksia: aseta TTL 300s Hetzner DNS -konsolissa, odota vanhan TTL:n verran, tee muutos.

```bash
# 1. Lisää uudet domainit SSL-sertifikaattiin
certbot --nginx -d apprix.fi -d www.apprix.fi -d www3.apprix.fi

# 2. Päivitä APP_URL palvelimen .env:iin
APP_URL=https://apprix.fi

# 3. Päivitä statamic.com-sivuston domain
# → https://statamic.com/account/sites → klikkaa apprix.fi-sivustoa → vaihda URL

# 4. Poista basic auth Nginx-konfiguraatiosta
```

---

## Tärkeää muistaa

- **Composer ennen npm-buildia** — Tailwind 4 skannaa vendor-kansion luokat. Jos vendor/ puuttuu build-vaiheessa, osa CSS:stä jää pois.
- **public/assets ja public/files ovat shared** — Deployer tekee niistä symlinkit. CP:n kautta uploadatut tiedostot menevät suoraan shared-kansioon eivätkä katoa deployssä.
- **content/ tulee reposta** — EI ole shared. Sisältömuutokset tallennetaan joko lokaalisti + push tai Statamic CP:n kautta (Statamic Git commitoi automaattisesti).
- **database.sqlite on shared** — Lokaalit ja palvelimen kannat ovat erilliset. Palvelimen kantaa ei ylikirjoiteta deployssa.
- **BOT-commitit ohitetaan** — Statamic Git lisää `[BOT]`-tunnisteen commit-viesteihin. GitHub Actions tarkistaa tämän ja ohittaa deployn, jotta ei synny looppia.
- **Rollback** — Jos deploy menee pieleen, `dep rollback production` palauttaa edellisen version.

---

## Avoimet tehtävät

- [ ] **Domain-siirto** — Ohjaa `apprix.fi` ja `www.apprix.fi` osoitteeseen 62.238.10.202 kun julkaisuun valmis (ks. ohjeet yllä)
- [ ] **Basic auth poisto** — Poista Nginx-konfiguraatiosta ennen julkaisua
- [ ] **Custom roolit käyttöön** — Korjaantuu automaattisesti domain-siirron jälkeen kun APP_URL päivitetään ja statamic.com-domain täsmää
- [ ] **Palvelimen kernel-päivitys** — Odottava päivitys (6.8.0-106 → 107), vaatii rebootin — tee sopivana ajankohtana
- [ ] **Node.js 24 GitHub Actionsissa** — actions/checkout@v4 ja actions/setup-node@v4 käyttävät Node 20:tä joka poistetaan syyskuussa 2026; päivitä versiot ajoissa
