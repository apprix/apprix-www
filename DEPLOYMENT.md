# Deployment

## Yleiskuva

Julkaisu tapahtuu automaattisesti GitHub Actionsin kautta. Push `main`-branchiin laukaisee deployn Hetzner-palvelimelle.

```
Push main → GitHub Actions → Build (Composer + Vite) → Deployer → Palvelin
```

Deployer tekee zero-downtime deployn: uusi versio kloonataan omaan hakemistoonsa ja `current`-symlink vaihdetaan atomisesti.

## Palvelin

| | |
|---|---|
| **IP** | 62.238.10.202 |
| **Hostname** | apprix-www |
| **OS** | Ubuntu 24.04 LTS |
| **PHP** | 8.4 (php8.4-fpm) |
| **Web** | Nginx |
| **Hetzner-projekti** | [143018](https://console.hetzner.cloud/projects/143018/servers/126819258/overview) |
| **Domain** | www3.apprix.fi (SSL aktiiviinen) |
| **SSH** | `ssh root@62.238.10.202` |

## GitHub Actions -pipeline

Tiedosto: `.github/workflows/deploy.yml`

### Vaiheet

1. **Checkout** — kloonaa repo
2. **Setup PHP 8.4** — asentaa PHP:n
3. **Composer install** — asentaa PHP-riippuvuudet (ENNEN Vite-buildia, jotta Tailwind näkee vendor-luokat)
4. **Setup Node.js 20** — asentaa Noden
5. **npm ci + npm run build** — buildaa CSS/JS Vitellä
6. **Deployer** — SSH:lla palvelimelle, kloonaa uusi release, asentaa vendorit, vaihtaa symlinkin

### Trigger

- Automaattinen: push `main`-branchiin
- Manuaalinen: GitHub Actions -sivulta "Re-run all jobs"

## Deployer (deploy.php)

[Deployer](https://deployer.org/) hoitaa varsinaisen julkaisun palvelimelle.

### Mitä Deployer tekee

1. SSH yhteys palvelimelle käyttäjänä `deploy`
2. `git clone` uuteen release-hakemistoon
3. `composer install --no-dev` palvelimella
4. Linkittää shared-tiedostot (.env, database.sqlite, storage/, public/assets/)
5. Uploadaa buildatut frontend-assetit (public/build/)
6. Synkkaa repo-assetit (kuvat, videot) shared-kansioon
7. Ajaa `artisan config:cache`, `route:cache`
8. Ajaa Statamic stache:warm ja search:update
9. Vaihtaa `current`-symlinkin uuteen releaseen

### Hakemistorakenne palvelimella

```
/var/www/apprix-www/
├── current -> releases/N          ← Nginx osoittaa tähän
├── releases/
│   ├── 1/
│   ├── 2/
│   └── ...                        ← max 5 säilytetään
└── shared/
    ├── .env                       ← tuotannon ympäristömuuttujat
    ├── database/database.sqlite   ← tietokanta (ei ylikirjoiteta)
    ├── storage/                   ← logit, cache, sessiot
    └── public/assets/             ← kuvat, videot (synkataan reposta)
```

### Rollback

```bash
dep rollback production
```

## Salaisuudet ja tunnukset

### GitHub Secrets (repo: apprix/apprix-www)

| Secret | Kuvaus |
|---|---|
| `SSH_PRIVATE_KEY` | Ed25519 yksityinen avain jolla GitHub Actions kirjautuu palvelimelle deploy-käyttäjänä |

Hallinta: https://github.com/apprix/apprix-www/settings/secrets/actions

### GitHub Deploy Key

Palvelimen `deploy`-käyttäjän julkinen avain on lisätty repoon deploy keyksi. Tämän avulla palvelin voi kloonata repon SSH:lla.

Hallinta: https://github.com/apprix/apprix-www/settings/keys

### Palvelimen .env

Sijainti: `/var/www/apprix-www/shared/.env`

Sisältää mm. APP_KEY, MAIL_PASSWORD, STATAMIC_LICENSE_KEY. Ei koskaan versionhallinnassa.

### Basic Auth (sisäinen käyttö)

Nginx basic auth suojaa sivuston:
- Käyttäjä: `apprix`
- Salasana: `Appr1x2026!`
- Tiedosto palvelimella: `/etc/nginx/.htpasswd`

Salasanan vaihto:
```bash
ssh root@62.238.10.202 "htpasswd -b /etc/nginx/.htpasswd apprix UUSI_SALASANA"
```

### SSH-avaimet

| Avain | Sijainti | Tarkoitus |
|---|---|---|
| antti-workstation | `~/.ssh/id_ed25519` (lokaali) | Root-pääsy palvelimelle |
| github-actions-deploy | GitHub Secret `SSH_PRIVATE_KEY` | Actions → palvelin (deploy-käyttäjä) |
| deploy@apprix-www | `/home/deploy/.ssh/id_ed25519` (palvelin) | Palvelin → GitHub (repo clone) |

### SSL-sertifikaatti

Let's Encrypt (Certbot) — uusitaan automaattisesti.
- Sertifikaatti: `/etc/letsencrypt/live/www3.apprix.fi/`
- Certbot timer tarkistaa uusinnan automaattisesti

## DNS

Nimipalvelimet: Hetzner DNS (helium.ns.hetzner.de, oxygen.ns.hetzner.com, hydrogen.ns.hetzner.com)

DNS hallinta: https://dns.hetzner.com (vaatii oman API-tokenin, ei sama kuin Cloud API)

| Domain | Osoite | Tila |
|---|---|---|
| www3.apprix.fi | 62.238.10.202 | Aktiivinen, SSL |
| apprix.fi | 95.216.201.18 | Vanha palvelin |
| www.apprix.fi | 95.216.201.18 | Vanha palvelin |

TTL:n lyhentäminen ennen DNS-muutoksia: aseta TTL 300s (5min) Hetzner DNS -konsolissa, odota vanhan TTL:n verran, tee muutos.

## Tärkeää muistaa

- **Composer ennen npm buildia** — Tailwind 4 skannaa vendor-kansion luokat (`@source` peak.css:ssä). Jos vendor/ ei ole olemassa build-vaiheessa, CSS puuttuu.
- **public/assets on shared** — Deployer tekee siitä symlinkin. Uudet assetit repossa synkataan automaattisesti, mutta Statamic CP:n kautta uploadatut assetit menevät suoraan shared-kansioon.
- **content/ tulee reposta** — EI ole shared. Sisältömuutokset tehdään joko lokaalisti + push tai Statamic CP:n kautta (jolloin tarvitaan Git-integraatio).
- **database.sqlite on shared** — Lokaalit ja palvelimen kannat ovat erilliset. Palvelimen kantaa ei ylikirjoiteta deployssa.

---

## TODO

- [ ] **Resend API-avain** — Hanki ja lisää `MAIL_PASSWORD` palvelimen .env:iin (`/var/www/apprix-www/shared/.env`). Ilman tätä sähköpostit eivät lähde.
- [ ] **Statamic-lisenssi** — Hanki lisenssiavain ja lisää `STATAMIC_LICENSE_KEY` palvelimen .env:iin. Trial mode toimii mutta näyttää bannerin.
- [ ] **Domain-siirto** — Kun valmista, ohjaa `apprix.fi` ja `www.apprix.fi` DNS:ssä osoitteeseen 62.238.10.202. Muista:
  - Laske TTL ensin 300s:iin, odota vanha TTL
  - Lisää domainit certbot:iin: `certbot --nginx -d apprix.fi -d www.apprix.fi -d www3.apprix.fi`
  - Päivitä APP_URL .env:iin
- [ ] **www2.apprix.fi** — Lisää DNS ja SSL kun tarpeen
- [ ] **Basic auth poisto** — Kun sivusto julkaistaan, poista basic auth Nginx-konfiguraatiosta (kommentoi `auth_basic`-rivit)
- [ ] **Hetzner DNS API token** — Luo erillinen token DNS-hallintaan osoitteessa https://dns.hetzner.com, jos halutaan hallita DNS:ää CLI:llä
- [ ] **Palvelimen kernel-päivitys** — Palvelimella on odottava kernel-päivitys (6.8.0-106 → 107), vaatii rebootin
- [ ] **Statamic Git-integraatio** — Jos CP:n kautta halutaan muokata sisältöä ja pushata automaattisesti repoon, kytke `STATAMIC_GIT_ENABLED=true` ja konfiguroi
