# Apprix Website

Company website for [Apprix Oy](https://apprix.fi) — built with Statamic 5, Laravel 12, and Tailwind CSS 4.

## Tech stack

- **CMS**: Statamic 5 (flat-file) with [Peak](https://peak.1702.nl/) starter
- **Backend**: Laravel 12 (PHP 8.2+)
- **Templating**: Antlers
- **Styling**: Tailwind CSS 4
- **JS**: Alpine.js 3
- **Build**: Vite 7

## Local setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php please make:user
npm install
npm run dev
```

In a separate terminal:

```bash
php artisan serve
```

Or run everything concurrently:

```bash
composer dev
```

## Build for production

```bash
npm run build
```

## Multisite

Three locales are configured:

| Site | Locale | URL prefix |
|------|--------|------------|
| Suomi (default) | fi_FI | `/` |
| English | en_US | `/en/` |
| Svenska | sv_SE | `/sv/` |

## Project structure

```
content/           Statamic flat-file content (collections, globals, nav trees, taxonomies)
resources/
  blueprints/      Collection, global, form, and asset blueprints
  fieldsets/        Reusable field definitions (page builder blocks)
  views/           Antlers templates (layout, sections, components, email)
  css/             Tailwind entrypoint + custom tokens
  js/              Alpine.js setup
  forms/           Form definitions (contact)
config/statamic/   Statamic configuration (sites, search, caching, etc.)
public/            Static assets (images, videos, favicons)
```
