<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description ?? 'Bouclay is gateway-agnostic billing infrastructure for subscriptions, invoices, dunning, and webhooks.' }}">
        <title>{{ $title ?? 'Bouclay' }}</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex min-h-dvh flex-col font-sans">
        <header class="sticky top-0 z-40 border-b border-border/70 bg-background/80 backdrop-blur-md">
            <div class="mx-auto flex h-16 w-full max-w-6xl items-center justify-between gap-6 px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-[0.95rem] font-semibold tracking-tight text-ink">
                    <span class="flex size-7 items-center justify-center text-accent">
                        <x-logo-icon class="size-full fill-current" />
                    </span>
                    <span>Bouclay</span>
                </a>

                <div class="flex items-center gap-2 text-sm">
                    <a
                        href="{{ route('home') }}"
                        class="rounded-md px-3 py-2 text-muted-foreground transition-colors hover:text-foreground"
                    >
                        Home
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="inline-flex items-center gap-2 rounded-md bg-ink px-3.5 py-2 font-medium text-ink-foreground transition-colors hover:bg-ink/90"
                    >
                        Start building
                        <x-icon name="arrow-right" class="size-3.5" />
                    </a>
                </div>
            </div>
        </header>

        <main class="flex flex-1 flex-col">
            {{ $slot }}
        </main>

        <footer class="mt-auto border-t border-border bg-surface">
            <div class="mx-auto flex w-full max-w-6xl flex-col gap-3 px-6 py-5 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <p>&copy; {{ now()->year }} Bouclay Inc.</p>
                <p>Your gateway handles payments. Bouclay handles billing logic.</p>
            </div>
        </footer>
    </body>
</html>
