<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Bouclay pitch deck: processor-agnostic recurring billing for African businesses."
        >
        <title>Pitch deck · Bouclay</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
        @php
            $slides = [
                ['id' => 'title', 'label' => 'Title'],
                ['id' => 'problem', 'label' => 'Problem'],
                ['id' => 'solution', 'label' => 'Solution'],
                ['id' => 'uvp', 'label' => 'UVP'],
                ['id' => 'competition', 'label' => 'Competition'],
                ['id' => 'product', 'label' => 'Product'],
                ['id' => 'vision', 'label' => 'Vision'],
                ['id' => 'ask', 'label' => 'The ask'],
            ];

            $problems = [
                'Gateways ship charges, not subscriptions',
                'Every SaaS team rebuilds the same billing stack',
                'Bugs mean double charges, lost revenue, cut-off customers',
                'Switching gateways means rebuilding everything',
            ];

            $solutions = [
                'Connect your own gateway account',
                'Define plans, prices, trials, and coupons',
                'Bouclay runs renewals, proration, and dunning',
                'Customers get a portal. Your app gets webhooks',
            ];

            $uvpPillars = [
                [
                    'title' => 'Bring your gateway',
                    'copy' => 'Nomba, Paystack, Flutterwave. Switch anytime.',
                    'tone' => 'bg-[#0f6e8c] text-white',
                ],
                [
                    'title' => 'Keep your money',
                    'copy' => 'Not a merchant of record. No revenue cut.',
                    'tone' => 'bg-[#0b3d4d] text-white',
                ],
                [
                    'title' => 'Real billing depth',
                    'copy' => 'State machines, dunning, proration, credits.',
                    'tone' => 'bg-[#e8a54b] text-ink',
                ],
            ];

            $competitors = [
                [
                    'who' => 'Gateways',
                    'examples' => 'Paystack · Flutterwave · Nomba',
                    'gap' => 'Shallow recurring only',
                ],
                [
                    'who' => 'Global platforms',
                    'examples' => 'Recurly · Chargebee · Stripe Billing · Paddle',
                    'gap' => 'Wrong rails or take your money',
                ],
                [
                    'who' => 'African all-in-ones',
                    'examples' => 'Bachs and similar',
                    'gap' => 'Replace your stack and hold funds',
                ],
            ];

            $productFeatures = [
                ['label' => 'Catalog', 'detail' => 'Versioned prices, trials, phased plans'],
                ['label' => 'Lifecycle', 'detail' => 'Upgrades, pauses, cancellations'],
                ['label' => 'Dunning', 'detail' => 'Hard vs soft declines, retries'],
                ['label' => 'APIs', 'detail' => 'Signed webhooks, multi-tenant'],
            ];

            $fundUses = [
                ['title' => 'Gateway adapters', 'share' => '35%', 'detail' => 'Paystack, Flutterwave, Stripe'],
                ['title' => 'Go-to-market', 'share' => '30%', 'detail' => 'Docs, onboarding, design partners'],
                ['title' => 'Product', 'share' => '20%', 'detail' => 'Portal, dashboard, reliability'],
                ['title' => 'Team', 'share' => '15%', 'detail' => 'Billing eng + developer relations'],
            ];
        @endphp

        <header class="fixed inset-x-0 top-0 z-40 border-b border-white/10 bg-[#0b0d12]/80 backdrop-blur-md">
            <div class="mx-auto flex h-14 w-full max-w-6xl items-center justify-between gap-4 px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-sm font-semibold tracking-tight text-white">
                    <span class="flex size-6 items-center justify-center text-[#5ec4e0]">
                        <x-logo-icon class="size-full fill-current" />
                    </span>
                    <span>Bouclay</span>
                </a>

                <p class="hidden text-sm text-white/55 sm:block">Pitch deck</p>

                <a
                    href="{{ route('home') }}"
                    class="rounded-md px-3 py-1.5 text-sm text-white/55 transition-colors hover:text-white"
                >
                    Site
                </a>
            </div>
        </header>

        <nav
            aria-label="Pitch deck sections"
            class="fixed top-1/2 right-4 z-40 hidden -translate-y-1/2 flex-col gap-2 lg:flex"
        >
            @foreach ($slides as $slide)
                <a
                    href="#{{ $slide['id'] }}"
                    class="group flex items-center justify-end gap-3"
                    data-slide-dot="{{ $slide['id'] }}"
                >
                    <span class="text-[11px] font-medium tracking-wide text-white/70 opacity-0 transition-opacity group-hover:opacity-100">
                        {{ $slide['label'] }}
                    </span>
                    <span class="size-2.5 rounded-[2px] bg-white/25 transition-colors group-hover:bg-[#5ec4e0] data-active:bg-[#5ec4e0]"></span>
                </a>
            @endforeach
        </nav>

        <main id="pitch-deck" class="h-dvh snap-y snap-mandatory overflow-y-auto scroll-smooth">
            {{-- 01 Title --}}
            <section id="title" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0b3d4d] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgb(94_196_224_/_0.35),transparent_42%),radial-gradient(circle_at_90%_10%,rgb(232_165_75_/_0.22),transparent_34%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#e8a54b] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        Title
                    </p>
                    <h1 class="mt-8 max-w-4xl text-5xl font-semibold tracking-[-0.04em] text-balance sm:text-7xl lg:text-[5rem] lg:leading-[1.02]">
                        Managed recurring billing,<br class="hidden sm:block"> across any gateway.
                    </h1>
                    <p class="mt-8 max-w-xl text-xl leading-8 text-white/75">
                        Keep your processor. Keep your money. Ship subscriptions in hours.
                    </p>
                </div>
            </section>

            {{-- 02 Problem --}}
            <section id="problem" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#1a1f2e] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute -top-24 -right-16 size-80 rounded-full bg-[#e07a5f]/30 blur-3xl"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#e07a5f] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Problem
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-6xl">
                        Gateways are not billing systems.
                    </h2>
                    <ul class="mt-12 grid gap-4 sm:grid-cols-2">
                        @foreach ($problems as $problem)
                            <li class="border border-[#e07a5f]/40 bg-[#e07a5f]/10 px-5 py-4 text-base font-medium leading-7">
                                {{ $problem }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            {{-- 03 Solution --}}
            <section id="solution" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0f6e8c] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 w-1/2 bg-[linear-gradient(135deg,transparent,rgb(11_61_77_/_0.45))]"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-white px-3 py-1.5 text-sm font-semibold tracking-wide text-[#0f6e8c] uppercase">
                        Solution
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-6xl">
                        Billing on the gateway you already use.
                    </h2>
                    <ol class="mt-12 grid gap-3 sm:grid-cols-2">
                        @foreach ($solutions as $index => $item)
                            <li class="flex items-start gap-4 border border-white/15 bg-white/10 px-5 py-4 backdrop-blur-sm">
                                <span class="font-mono text-sm font-semibold text-[#e8a54b]">0{{ $index + 1 }}</span>
                                <span class="text-base font-medium leading-7">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </section>

            {{-- 04 UVP --}}
            <section id="uvp" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#f7f8fa] px-6 pt-14 lg:px-8">
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#0b3d4d] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        UVP
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] text-ink sm:text-6xl">
                        Recurly-grade billing.<br>African rails. Your money stays yours.
                    </h2>
                    <div class="mt-12 grid gap-4 lg:grid-cols-3">
                        @foreach ($uvpPillars as $pillar)
                            <article class="{{ $pillar['tone'] }} p-6 sm:p-8">
                                <h3 class="text-2xl font-semibold tracking-tight">{{ $pillar['title'] }}</h3>
                                <p class="mt-4 text-base leading-7 opacity-90">{{ $pillar['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 05 Competition --}}
            <section id="competition" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#12263a] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute bottom-0 left-0 size-96 bg-[radial-gradient(circle,rgb(94_196_224_/_0.2),transparent_60%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#5ec4e0] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        Competition
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-6xl">
                        We sit in the gap.
                    </h2>
                    <p class="mt-4 max-w-2xl text-lg text-white/70">
                        Not gateway lock-in. Not a merchant of record.
                    </p>
                    <div class="mt-10 grid gap-4">
                        @foreach ($competitors as $row)
                            <article class="grid gap-3 border border-white/10 bg-white/5 p-5 sm:grid-cols-[10rem_1fr_1fr] sm:items-center">
                                <p class="text-lg font-semibold text-[#5ec4e0]">{{ $row['who'] }}</p>
                                <p class="text-sm text-white/65">{{ $row['examples'] }}</p>
                                <p class="text-sm font-medium text-[#e8a54b]">{{ $row['gap'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <p class="mt-8 text-base font-medium text-white">
                        Bouclay = processor-agnostic billing on African gateways, funds-neutral.
                    </p>
                </div>
            </section>

            {{-- 06 Product --}}
            <section id="product" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#e8f6fa] px-6 pt-14 lg:px-8">
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#0f6e8c] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Product
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] text-ink sm:text-6xl">
                        Hours, not weeks.
                    </h2>
                    <div class="mt-12 grid gap-4 sm:grid-cols-2">
                        @foreach ($productFeatures as $feature)
                            <article class="border border-[#0f6e8c]/15 bg-white p-6">
                                <h3 class="text-xl font-semibold text-[#0f6e8c]">{{ $feature['label'] }}</h3>
                                <p class="mt-2 text-base text-ink/70">{{ $feature['detail'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 07 Vision --}}
            <section id="vision" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#e8a54b] px-6 pt-14 text-ink lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute -bottom-20 -left-10 size-72 rounded-full bg-white/30 blur-3xl"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-ink px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Vision
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-6xl">
                        Default billing layer for African payment rails.
                    </h2>
                    <div class="mt-12 grid gap-4 lg:grid-cols-3">
                        <article class="bg-ink p-6 text-white">
                            <p class="text-sm font-semibold tracking-wide text-[#e8a54b] uppercase">Near</p>
                            <p class="mt-3 text-lg font-medium leading-7">Open access. More gateways. Design partners live.</p>
                        </article>
                        <article class="bg-white/70 p-6">
                            <p class="text-sm font-semibold tracking-wide text-[#0f6e8c] uppercase">Mid</p>
                            <p class="mt-3 text-lg font-medium leading-7">Multi-gateway, multi-region. One billing brain.</p>
                        </article>
                        <article class="bg-[#0b3d4d] p-6 text-white">
                            <p class="text-sm font-semibold tracking-wide text-[#5ec4e0] uppercase">Long</p>
                            <p class="mt-3 text-lg font-medium leading-7">Every African SaaS runs recurring on Bouclay.</p>
                        </article>
                    </div>
                </div>
            </section>

            {{-- 08 The ask --}}
            <section id="ask" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0b0d12] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_70%_30%,rgb(15_110_140_/_0.35),transparent_45%),radial-gradient(circle_at_10%_80%,rgb(232_165_75_/_0.18),transparent_40%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl">
                    <p class="inline-flex rounded-md bg-[#e8a54b] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        The ask
                    </p>
                    <h2 class="mt-8 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-6xl">
                        Fund the path to production integrators.
                    </h2>
                    <p class="mt-4 max-w-2xl text-lg text-white/70">
                        Milestone: 3 gateway adapters live + design partners in production.
                    </p>
                    <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($fundUses as $use)
                            <article class="border border-white/10 bg-white/5 p-5">
                                <p class="font-mono text-2xl font-semibold text-[#5ec4e0]">{{ $use['share'] }}</p>
                                <h3 class="mt-3 text-lg font-semibold">{{ $use['title'] }}</h3>
                                <p class="mt-2 text-sm text-white/60">{{ $use['detail'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        <a
                            href="mailto:hello@bouclay.com"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-[#e8a54b] px-5 py-3 text-sm font-semibold text-ink transition-colors hover:bg-[#f0b860]"
                        >
                            hello@bouclay.com
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                        <a
                            href="{{ route('home') }}"
                            class="inline-flex items-center justify-center rounded-md border border-white/20 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-white/10"
                        >
                            Product site
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
