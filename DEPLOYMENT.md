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
| **Statamic** | 6.20.0 PRO (Laravel 12; lisenssi voimassa 6.x:lle) |
| **Web** | Nginx |
| **Hetzner-projekti** | [143018](https://console.hetzner.cloud/projects/143018/servers/126819258/overview) |
| **Domain** | **www2.apprix.fi — LIVE** (julkinen, SSL aktiivinen, ei basic authia). www3.apprix.fi = vanha staging. |
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

## Statamic- ja riippuvuuspäivitykset

Statamicia, Peak-addoneja tai muita Composer-riippuvuuksia **ei päivitetä hallintapaneelista eikä palvelimella.**

### Miksi ei CP:stä / palvelimelta

- CP:n **Tools → Updates** vain *näyttää* `composer update` -komennon — se ei aja sitä. Pelkkä info.
- `vendor/` rakennetaan **GitHub Actionsissa** (`composer install --no-dev`), ei palvelimella. Releaset ovat immutaabeleita (symlink) → palvelimella ajettu composer-muutos **katoaa seuraavassa deployssa**.
- ⇒ Gitin `composer.lock` on ainoa totuus. Päivitys = uusi lock → PR → merge → normaali deploy.

### Prosessi (patch/minor, esim. 6.20 → 6.22)

1. **GitHub → Actions → "Composer update" → Run workflow.** Valitse `scope`:
   | scope | Päivittää |
   |---|---|
   | `statamic+addons` (oletus) | Statamic core + kaikki Peak-addonit (+ riippuvuudet) |
   | `statamic-only` | Vain `statamic/cms` (+ riippuvuudet) |
   | `addons-only` | Vain Peak-addonit (+ riippuvuudet) |
   | `all` | Kaikki (`composer update`) |
2. Workflow ajaa `composer update … --no-scripts`, committaa `composer.lock`:n omalle haaralle ja **avaa PR:n** automaattisesti.
3. **Tarkista PR:n `composer.lock`-diffi** (job-logissa `composer outdated` -yhteenveto Statamic/Peak-versioista).
4. **Merge `main`** → normaali Deploy buildaa lockista ja julkaisee. Static cache tyhjenee automaattisesti.

`--no-scripts`: artisan/install-skriptit tarvitsevat täyden app+env:n ja kaatuisivat paljaassa CI:ssä; varsinainen build tehdään silti `deploy.yml`:ssä. CP-assetit (Vite manifest) julkaistaan `pixelfear/composer-dist-plugin`-pluginilla deploy-buildissa.

### Major-päivitys (esim. 6 → 7)

1. Muuta constraint `composer.json`:iin haarassa (esim. `"statamic/cms": "^7.0"`).
2. Käy läpi Statamicin [upgrade guide](https://statamic.dev/upgrade-guide) ja testaa haarassa ennen mergeä.
3. Sama PR → merge → deploy -putki kuin yllä.

### Vaatimus

Workflow avaa PR:n → repon asetuksissa **Settings → Actions → General → Workflow permissions → "Allow GitHub Actions to create and approve pull requests"** on oltava päällä. Tiedosto: `.github/workflows/composer-update.yml`.

> **Älä** päivitä Statamicia CP:stä tai aja `composer update` palvelimella — muutos katoaa seuraavassa deployssa ja voi rikkoa releasen.

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
12. Tyhjentää static page cachen (`statamic:static:clear`) — jotta koodi-/templaattimuutokset näkyvät heti
13. Siivoaa vanhimmat releaset (max 5 säilytetään)

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
| `APP_URL` | `https://www2.apprix.fi` | Tuotanto (live) |
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
| `HELP_AUTH_ENABLED` | `true` | Vaatii Builder-kirjautumisen /help ja /faq -sivuille |
| `BUILDER_CHECKLI_URL` | Asetettu | Builder-sessiotarkistuksen endpoint |

Sisältää myös APP_KEY, MAIL_PASSWORD, STATAMIC_LICENSE_KEY. Ei koskaan versionhallinnassa.

### Basic Auth (POISTETTU — historiatieto)

Sivusto oli julkaisuun asti suojattu Nginx basic authilla. **Poistettu julkaisun yhteydessä** — www2.apprix.fi on nyt julkinen, ei basic authia. `/etc/nginx/.htpasswd` voi yhä olla palvelimella, mutta `auth_basic` on pois käytöstä Nginx-konfiguraatiosta.

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

---

## DNS

Nimipalvelimet: Hetzner DNS (helium.ns.hetzner.de, oxygen.ns.hetzner.com, hydrogen.ns.hetzner.com)

DNS-hallinta: https://dns.hetzner.com

| Domain | Osoite | Tila |
|---|---|---|
| www2.apprix.fi | 62.238.10.202 | **LIVE** (tuotanto, julkinen), SSL ✅ |
| www3.apprix.fi | 62.238.10.202 | Vanha staging |
| apprix.fi, www.apprix.fi | — | Redirect → www2.apprix.fi |

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

- [x] **Domain-siirto www3 → www2** — Valmis (2026-06-15): www2.apprix.fi live, SSL aktiivinen, APP_URL päivitetty.
- [x] **Basic auth poisto** — Valmis (2026-06-15): www2 julkinen, ei basic authia.
- [ ] **Node.js 24 GitHub Actionsissa** — actions/checkout@v4 ja actions/setup-node@v4 käyttävät Node 20:tä joka poistetaan syyskuussa 2026; päivitä versiot ajoissa (deploy-loki varoittaa jo)
- [ ] **composer-update.yml: korjaa deploy-skip** — workflow committaa `github-actions[bot]`-nimellä → squash-mergen `Co-authored-by`-rivi osuu deployn case-insensitive `[BOT]`-suodattimeen → deploy skippaa. Vaihda git-author nimeen ilman `[bot]`-merkkijonoa. Lisäksi `composer outdated` -rivi ottaa vain yhden pakettiargumentin (kosmeettinen).
