<p align="center">
  <img src="public/images/apprix_logo_rgb.png" alt="Apprix" width="280">
</p>

<h3 align="center">Company Website</h3>

<p align="center">
  Built with Statamic 5 &middot; Laravel 12 &middot; Tailwind CSS 4 &middot; Alpine.js 3
</p>

---

## Links

| | |
|---|---|
| **Production** | [www2.apprix.fi](https://www2.apprix.fi) |
| **Control Panel** | [www2.apprix.fi/hallinta](https://www2.apprix.fi/hallinta) |
| **Help / Docs** | [www2.apprix.fi/help](https://www2.apprix.fi/help) |
| **FAQ** | [www2.apprix.fi/faq](https://www2.apprix.fi/faq) |
| **GitHub** | [apprix/apprix-www](https://github.com/apprix/apprix-www) |
| **Hetzner Console** | [Project 143018](https://console.hetzner.cloud/projects/143018/servers/126819258/overview) |
| **DNS** | [dns.hetzner.com](https://dns.hetzner.com) |
| **Email (Resend)** | [resend.com](https://resend.com) |

---

## Deployment

Push to `main` triggers an automatic deploy to the Hetzner server via GitHub Actions and Deployer.

**[Read the full deployment documentation &rarr;](DEPLOYMENT.md)**

---

## Local Setup

### Requirements

- PHP **8.4**
- Composer
- Node.js **20+**

### Quick start

```bash
composer setup
```

This runs composer install, copies `.env`, generates the app key, runs migrations, installs npm packages and builds assets.

Then create your first admin user:

```bash
php please make:user
```

### Run the dev server

```bash
composer dev
```

Starts the PHP server, queue listener, log watcher, and Vite dev server concurrently.

### Or step by step

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev          # in one terminal
php artisan serve    # in another terminal
```

---

## Important Notes

- **Composer must run before npm build** - Tailwind CSS 4 scans `vendor/` for class names
- **Static caching is on** - Clear with `php artisan statamic:stache:clear` if content changes don't appear
- **Statamic Git is disabled locally** - Only enabled on production
- **BOT commits don't trigger deploys** - CP auto-commits contain `[BOT]` and are skipped by GitHub Actions
- **Max upload size is 100 MB** - Configured in `public/.user.ini`

---

## Multisite

| Site | Locale | URL |
|---|---|---|
| Suomi (default) | fi_FI | `/` |
| English | en_US | `/en/` |
| Svenska | sv_SE | `/sv/` |

Untranslated entries fall back to Finnish.
