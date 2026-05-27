# Apprix Website

Company website for [Apprix Oy](https://apprix.fi) — built with Statamic 5, Laravel 12, and Tailwind CSS 4.

## Tech stack

| | |
|---|---|
| **CMS** | Statamic 5 (flat-file) with [Peak](https://peak.1702.nl/) starter |
| **Backend** | Laravel 12, PHP 8.4 |
| **Templating** | Antlers |
| **Styling** | Tailwind CSS 4 |
| **JS** | Alpine.js 3 |
| **Build** | Vite 7 |
| **Database** | SQLite (flat-file content, SQLite for sessions/jobs) |

---

## Requirements

- PHP **8.4** (matches production)
- Composer
- Node.js **20+**

---

## Local setup

The quickest way — runs composer install, copies .env, generates key, runs migrations, installs npm packages and builds assets:

```bash
composer setup
```

Then create your first admin user:

```bash
php please make:user
```

Or do it step by step:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

In a separate terminal:

```bash
php artisan serve
```

### Run everything at once

```bash
composer dev
```

This starts the PHP server, queue listener, log watcher, and Vite dev server concurrently.

---

## Environment variables

Copy `.env.example` to `.env`. Key variables to be aware of:

| Variable | Default | Notes |
|---|---|---|
| `APP_URL` | _(empty)_ | Set to `http://localhost:8000` for local dev |
| `STATAMIC_GIT_ENABLED` | `false` | Keep `false` locally — only enabled on production |
| `STATAMIC_STATIC_CACHING_STRATEGY` | `half` | Static caching is on by default. Clear cache with `php artisan statamic:stache:clear` if content changes don't appear |
| `CP_ROUTE` | `hallinta` | Control panel URL is `/hallinta`, not `/cp` |
| `HELP_AUTH_ENABLED` | `false` | When `true`, `/help` and `/faq` require a Builder login. Keep `false` locally |
| `BUILDER_CHECKLI_URL` | _(test endpoint)_ | Builder session check endpoint — no need to change locally |
| `DEBUGBAR_ENABLED` | `false` | Set to `true` to enable Laravel Debugbar |
| `MAIL_PASSWORD` | _(empty)_ | Resend API key — only needed on production |

---

## Control panel

The Statamic control panel is at `/hallinta` (not the default `/cp`).

### Roles

| Role | Permissions |
|---|---|
| **Super Admin** | Full access |
| **Editor** | Edit pages, content, images, view form submissions |
| **Marketer** | SEO settings and redirects |
| **User management** | Manage users |
| **Form editor** | Edit form field definitions |

To invite a new user: Control panel → Users → Invite.

---

## Project structure

```
content/                  Statamic flat-file content (collections, globals, nav, taxonomies)
resources/
  blueprints/             Field blueprints for collections, globals, assets, forms
  fieldsets/              Reusable field definitions (page builder blocks)
  views/                  Antlers templates
    layout.antlers.html   Main layout
    layout_docs.antlers.html   Help/docs layout
    layout_faq.antlers.html    FAQ layout
    page_builder/         Page builder section templates
    components/           Reusable UI components
    docs/                 Help docs views
    faq/                  FAQ views
  css/                    Tailwind entrypoint + design tokens
  js/                     Alpine.js setup
  forms/                  Form definitions
app/
  Http/
    Controllers/          BuilderAuthController, DocsSearchController, FaqSearchController
    Middleware/            BuilderAuth, RequireBuilderAuth
config/statamic/          Statamic configuration files
public/
  assets/                 CP-uploaded files (symlinked from shared on server)
  images/                 Images tracked in git (auto-committed by Statamic Git on production)
  files/                  Docs/files uploads (symlinked from shared on server)
  build/                  Vite build output (gitignored, generated on deploy)
deploy.php                Deployer configuration
.github/workflows/        GitHub Actions CI/CD pipeline
```

---

## Collections

| Collection | Handle | Description |
|---|---|---|
| Pages | `pages` | Main site pages, built with the page builder |
| Articles | `articles` | Blog/news articles |
| FAQ | `faq` | FAQ items, shown on `/faq` |
| Docs / Help | `docs` | Help documentation, shown on `/help/*` |

---

## Multisite

Three locales are configured:

| Site | Locale | URL prefix |
|---|---|---|
| Suomi (default) | fi_FI | `/` |
| English | en_US | `/en/` |
| Svenska | sv_SE | `/sv/` |

Content is managed per-locale in the control panel. Not all content needs to be translated — untranslated entries fall back to Finnish.

---

## Custom routes

| Route | Description |
|---|---|
| `GET /help` | Redirects to the first docs entry (section 1) |
| `GET /help/search.json` | Docs full-text search API |
| `GET /faq` | FAQ index page |
| `GET /faq/search.json` | FAQ search API |
| `GET /api/search` | Global site search API (used by the search component) |
| `GET /builder-auth/check` | Builder auth check page (handles session flow) |
| `POST /builder-auth/verify` | Sets Builder auth session after successful check |
| `GET /builder-auth/logout` | Clears Builder auth session |

---

## Help & FAQ authentication

`/help` and `/faq` are optionally gated behind a Builder login. Controlled by `HELP_AUTH_ENABLED` in `.env`.

**Flow when enabled:**
1. User visits `/help` or `/faq`
2. Middleware redirects to `/builder-auth/check`
3. A client-side `fetch` calls the Builder `checkli` endpoint (`BUILDER_CHECKLI_URL`) with `credentials: 'include'`
4. If the endpoint returns `"1"` (logged in) → session is set, user is redirected back
5. If not → user is redirected to the Builder login page

Keep `HELP_AUTH_ENABLED=false` locally unless you are specifically testing the auth flow.

---

## Images and assets

| Container | Location | Notes |
|---|---|---|
| **Images** | `public/images/` | Tracked in git. Committed automatically by Statamic Git on production. |
| **Assets** | `public/assets/` | CP-uploaded files. Shared across deployments (not in git). |
| **Files** | `public/files/` | Docs/help uploads. Shared across deployments (not in git). |
| **Social images** | `public/social_images/` | OG images, tracked in git. |
| **Favicons** | `public/favicons/` | Tracked in git. |

Uploaded images are automatically resized to a maximum of **4500px wide** on upload via the `replacement` source preset.

Allowed upload formats include: `jpg`, `png`, `gif`, `webp`, `avif`, `svg`, `heic`, `pdf`, `mp4`, `mov`, `zip`, and more. Max file size is **50 MB** (set in `public/.user.ini`).

---

## Important gotchas

**Composer must run before npm build.**
Tailwind CSS 4 scans the `vendor/` directory for class names. If you run `npm run build` before `composer install`, some CSS classes will be missing.

**Static caching.**
`STATAMIC_STATIC_CACHING_STRATEGY=half` is on by default. If content changes don't appear on the front end, clear the cache:
```bash
php artisan statamic:stache:clear
```

**Statamic Git is disabled locally.**
`STATAMIC_GIT_ENABLED=false` in `.env.example`. Do not enable it locally — it is only meant for production where the server has the deploy SSH key configured.

**The control panel route is `/hallinta`.**
Not `/cp`. This is set via `CP_ROUTE=hallinta` in `.env`.

**BOT commits don't trigger deployment.**
On production, every time someone saves content in the CP, Statamic auto-commits and pushes to GitHub with a `[BOT]` tag in the commit message. GitHub Actions is configured to skip deployments for these commits to prevent a loop.

---

## Deployment

Push to `main` → GitHub Actions builds and deploys automatically to the Hetzner server.

```bash
# Manual rollback if needed (run on your machine with Deployer installed)
dep rollback production
```

See [DEPLOYMENT.md](DEPLOYMENT.md) for the full deployment documentation.
