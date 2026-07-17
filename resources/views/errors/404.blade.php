<x-layouts.site
    title="Page not found · Bouclay"
    description="The page you requested could not be found."
>
    <section class="relative flex flex-1 flex-col overflow-hidden">
        <div
            aria-hidden="true"
            class="mesh-drift pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_12%,rgb(15_110_140_/_0.14),transparent_42%),radial-gradient(circle_at_82%_8%,rgb(11_13_18_/_0.06),transparent_36%),linear-gradient(180deg,#f7f8fa_0%,#eef1f6_55%,#f7f8fa_100%)]"
        ></div>

        <div class="mx-auto flex w-full max-w-6xl flex-1 flex-col justify-center px-6 py-20 lg:px-8 lg:py-28">
            <div class="max-w-2xl">
                <p class="hero-line font-mono text-sm tracking-wide text-muted-foreground">
                    Error 404
                </p>

                <h1 class="hero-line mt-5 text-4xl font-semibold tracking-[-0.04em] text-balance text-ink sm:text-5xl" style="animation-delay: 80ms">
                    This page is not on the map.
                </h1>

                <p class="hero-line mt-6 text-lg leading-8 text-muted-foreground" style="animation-delay: 160ms">
                    The URL may be mistyped, or the page may have moved. Head back to the homepage to keep exploring Bouclay.
                </p>

                <div class="hero-line mt-10 flex flex-col gap-3 sm:flex-row" style="animation-delay: 240ms">
                    <a
                        href="{{ route('home') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-ink px-5 py-3 text-sm font-medium text-ink-foreground transition-colors hover:bg-ink/90"
                    >
                        Back to home
                        <x-icon name="arrow-right" class="size-4" />
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="inline-flex items-center justify-center rounded-md border border-border bg-surface px-5 py-3 text-sm font-medium text-foreground transition-colors hover:bg-muted"
                    >
                        Start building
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.site>
