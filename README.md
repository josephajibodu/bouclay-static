# Bouclay (marketing site)

Public marketing site for [Bouclay](https://bouclay.com): gateway-agnostic billing infrastructure for subscriptions, invoices, dunning, and webhooks.

This repo is the static-facing Laravel app for the landing experience. Product auth and the billing platform live elsewhere; `/login` and `/register` currently show a coming-soon page.

## Stack

- Laravel 13 / PHP 8.3+
- Blade + Tailwind CSS v4 + Vite
- Pest 4

## Local setup

```bash
composer setup
composer run dev
```

Or step by step:

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
composer run dev
```

The site will be available at the URL printed by `php artisan serve` (usually `http://127.0.0.1:8000`).

## Useful commands

```bash
npm run dev          # Vite HMR
npm run build        # Production assets
php artisan test     # Pest suite
vendor/bin/pint      # Code style
```

## Routes

| Path | Purpose |
| --- | --- |
| `/` | Landing page |
| `/pitch-deck` | Hackathon pitch deck |
| `/login` | Coming soon |
| `/register` | Coming soon |

Unknown paths render a custom 404.
