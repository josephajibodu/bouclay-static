@php
    $isLogin = request()->routeIs('login');
    $eyebrow = 'Coming soon';
    $headline = $isLogin ? 'Log in is almost ready.' : 'Workspace access is almost ready.';
    $support = $isLogin
        ? 'We are finishing the account surface. Check back soon to sign in to your Bouclay workspace.'
        : 'We are finishing the product surface. Check back soon to create your Bouclay workspace.';
@endphp

<x-layouts.site
    :title="$isLogin ? 'Log in · Bouclay' : 'Register · Bouclay'"
    description="Bouclay workspace access is coming soon."
>
    <section class="relative flex flex-1 flex-col overflow-hidden">
        <div
            aria-hidden="true"
            class="mesh-drift pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_12%,rgb(15_110_140_/_0.14),transparent_42%),radial-gradient(circle_at_82%_8%,rgb(11_13_18_/_0.06),transparent_36%),linear-gradient(180deg,#f7f8fa_0%,#eef1f6_55%,#f7f8fa_100%)]"
        ></div>

        <div class="mx-auto flex w-full max-w-6xl flex-1 flex-col justify-center px-6 py-20 lg:px-8 lg:py-28">
            <div class="flex max-w-2xl flex-col gap-12">
                <div>
                    <p class="hero-line text-sm font-medium tracking-[0.22em] text-accent uppercase">
                        {{ $eyebrow }}
                    </p>

                    <h1 class="hero-line mt-5 text-4xl font-semibold tracking-[-0.04em] text-balance text-ink sm:text-5xl" style="animation-delay: 80ms">
                        {{ $headline }}
                    </h1>

                    <p class="hero-line mt-6 text-lg leading-8 text-muted-foreground" style="animation-delay: 160ms">
                        {{ $support }}
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
                            href="{{ route('home') }}#developers"
                            class="inline-flex items-center justify-center rounded-md border border-border bg-surface px-5 py-3 text-sm font-medium text-foreground transition-colors hover:bg-muted"
                        >
                            Explore the platform
                        </a>
                    </div>
                </div>

                <div class="hero-line border border-border bg-surface p-6 sm:p-8" style="animation-delay: 320ms">
                    <p class="font-mono text-xs tracking-wide text-muted-foreground">STATUS</p>
                    <p class="mt-3 text-sm font-medium text-ink">Product access is in final polish.</p>
                    <p class="mt-2 text-sm leading-6 text-muted-foreground">
                        Billing infrastructure is shipping first. Account creation and sign-in will open on this site next.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.site>
