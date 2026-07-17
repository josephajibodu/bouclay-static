<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Bouclay investor pitch deck: processor-agnostic recurring billing for African businesses."
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
                ['id' => 'market', 'label' => 'Market'],
                ['id' => 'product', 'label' => 'Product'],
                ['id' => 'model', 'label' => 'Model'],
                ['id' => 'vision', 'label' => 'Vision'],
                ['id' => 'ask', 'label' => 'The ask'],
            ];

            $problemPoints = [
                [
                    'title' => 'Gateways stop at primitives',
                    'copy' => 'Checkout, tokenised cards, and transfers ship. A managed subscriptions layer does not. Teams still need plans, proration, dunning, portals, and webhooks.',
                ],
                [
                    'title' => 'Every team rebuilds the same system',
                    'copy' => 'Subscription state machines, billing cycles, failed-payment recovery, and customer portals take weeks and are easy to get wrong.',
                ],
                [
                    'title' => 'Errors cost real money',
                    'copy' => 'Double charges, revenue lost to failed cards that never recover, and paying customers accidentally cut off.',
                ],
                [
                    'title' => 'One gateway becomes lock-in',
                    'copy' => 'Switching providers or adding a second gateway for a new market means rebuilding billing from scratch.',
                ],
            ];

            $solutionCapabilities = [
                [
                    'title' => 'Checkout and charging',
                    'copy' => 'Tokenise through the gateway hosted checkout and charge on every billing cycle using the tenant\'s own credentials.',
                ],
                [
                    'title' => 'Guarded lifecycle',
                    'copy' => 'Renewals, upgrades, downgrades, pauses, and cancellations with automatic proration through a state machine that blocks invalid transitions.',
                ],
                [
                    'title' => 'Reason-aware dunning',
                    'copy' => 'Classify hard vs soft declines and run configurable retry schedules so recoverable failures do not silently kill revenue.',
                ],
                [
                    'title' => 'Portal and webhooks',
                    'copy' => 'Customer self-service for cards and subscriptions, plus signed webhooks so downstream systems stay in sync.',
                ],
            ];

            $uvpPillars = [
                [
                    'title' => 'Bring your own gateway',
                    'copy' => 'Unlike African all-in-ones that replace your payment stack, or global tools tied to Western processors, Bouclay runs on Nomba, Paystack, Flutterwave, and more. Switch or combine providers without rebuilding billing.',
                    'tone' => 'bg-[#0f6e8c] text-white',
                ],
                [
                    'title' => 'You keep your money',
                    'copy' => 'Unlike merchants of record (Paddle, Lemon Squeezy, MoR-mode stacks) that hold funds and take a revenue cut, Bouclay never touches money. Settlement stays in your gateway account. No custody. No MoR licensing burden.',
                    'tone' => 'bg-[#0b3d4d] text-white',
                ],
                [
                    'title' => 'Billing depth gateways lack',
                    'copy' => 'Unlike shallow gateway recurring features, Bouclay adds guarded state machines, hard/soft-decline dunning, proration, phased pricing, credits, multi-tenant isolation, and clean developer APIs.',
                    'tone' => 'bg-[#e8a54b] text-ink',
                ],
            ];

            $competitors = [
                [
                    'group' => 'Gateways with built-in recurring',
                    'examples' => 'Paystack, Flutterwave, Nomba, KoraPay, Monnify',
                    'limit' => 'Scheduled charges only. Limited proration, weak dunning, no multi-tenant billing engine.',
                    'bouclay' => 'Adds Recurly-grade depth on top of the same gateways.',
                ],
                [
                    'group' => 'Global subscription platforms',
                    'examples' => 'Recurly, Chargebee, Zuora, Stripe Billing, Paddle, Lemon Squeezy',
                    'limit' => 'Built for Western processors or MoR models. Do not settle natively to African bank accounts while staying funds-neutral.',
                    'bouclay' => 'Sophisticated billing for African rails without giving up gateway or revenue.',
                ],
                [
                    'group' => 'African all-in-one platforms',
                    'examples' => 'Bachs and similar stacks',
                    'limit' => 'Replace your payment stack and handle your money. Merchant-of-record trade-offs.',
                    'bouclay' => 'Layers onto the gateway you already run. Never holds funds.',
                ],
            ];

            $marketDrivers = [
                [
                    'title' => 'Who buys',
                    'copy' => 'Product-led SaaS and digital businesses on African payment rails that need recurring revenue without becoming a billing engineering org.',
                ],
                [
                    'title' => 'Why now',
                    'copy' => 'More products launch on subscriptions before they have time to build the state machine. Local gateways are strong on payments, weak on billing depth.',
                ],
                [
                    'title' => 'Where we win',
                    'copy' => 'Gateway-diverse markets where Stripe Billing does not map cleanly, and where MoR take-rates or full-stack replacement are unacceptable.',
                ],
            ];

            $productFeatures = [
                ['label' => 'Catalog and pricing', 'detail' => 'Flat, annual, and custom cycles. Immutable versioned prices so raises never silently reprice existing customers. Coupons, credits, intro and phased pricing.'],
                ['label' => 'Subscription lifecycle', 'detail' => 'Guarded state machine for renewals, upgrades, downgrades, pauses, and cancellations with automatic proration.'],
                ['label' => 'Dunning and recovery', 'detail' => 'Hard vs soft decline classification, configurable retry schedules, and invoice/payment attempt histories.'],
                ['label' => 'Architecture', 'detail' => 'Processor-agnostic core with thin gateway adapters. Multi-tenant isolation. Idempotent charges. Signed webhooks with delivery logs.'],
            ];

            $modelPoints = [
                [
                    'title' => 'What we sell',
                    'copy' => 'Infrastructure pricing for the orchestration layer: platform access, API usage, and managed subscription volume.',
                ],
                [
                    'title' => 'What we do not take',
                    'copy' => 'No merchant funds. No interchange cut. Payment processing fees stay with the gateway the customer already uses.',
                ],
                [
                    'title' => 'Why it scales',
                    'copy' => 'Adding a gateway is a thin adapter. The billing brain (state, proration, dunning, invoicing) stays shared across every processor.',
                ],
            ];

            $visionPhases = [
                [
                    'phase' => 'Near term',
                    'copy' => 'Open workspace access, expand gateway adapters beyond Nomba, and land design partners shipping subscriptions on Bouclay in production.',
                    'tone' => 'bg-ink text-white',
                    'label' => 'text-[#e8a54b]',
                ],
                [
                    'phase' => 'Mid term',
                    'copy' => 'Multi-gateway and multi-region billing under one API. Teams add markets and processors without rewriting the billing layer.',
                    'tone' => 'bg-white/75 text-ink',
                    'label' => 'text-[#0f6e8c]',
                ],
                [
                    'phase' => 'Long term',
                    'copy' => 'Become the default billing layer for software companies on African payment rails: Recurly-grade depth, local settlement, no lock-in.',
                    'tone' => 'bg-[#0b3d4d] text-white',
                    'label' => 'text-[#5ec4e0]',
                ],
            ];

            $fundUses = [
                [
                    'title' => 'Gateway coverage',
                    'share' => '35%',
                    'detail' => 'Ship Paystack, Flutterwave, and Stripe adapters on the Nomba foundation so integrators can choose and combine processors.',
                ],
                [
                    'title' => 'Integrator GTM',
                    'share' => '30%',
                    'detail' => 'Public API docs, onboarding, and design-partner programs with African SaaS teams ready to ship recurring revenue.',
                ],
                [
                    'title' => 'Product hardening',
                    'share' => '20%',
                    'detail' => 'Customer portal, dashboard polish, billing simulations, and production observability.',
                ],
                [
                    'title' => 'Core team',
                    'share' => '15%',
                    'detail' => 'Billing engineering and developer relations to support early integrators.',
                ],
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

                <p class="hidden text-sm text-white/55 sm:block">Investor pitch deck</p>

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
                    <h1 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.04em] text-balance sm:text-6xl lg:text-[4.5rem] lg:leading-[1.05]">
                        Managed recurring billing, across any payment gateway.
                    </h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-white/80 sm:text-xl">
                        The processor-agnostic subscription layer for African businesses. Keep your gateway. Keep your money. Ship production billing in hours instead of weeks.
                    </p>
                    <p class="mt-10 font-mono text-xs tracking-wide text-white/50">
                        Bouclay Inc. · Investor deck · Scroll or use arrow keys
                    </p>
                </div>
            </section>

            {{-- 02 Problem --}}
            <section id="problem" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#1a1f2e] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute -top-24 -right-16 size-80 rounded-full bg-[#e07a5f]/30 blur-3xl"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#e07a5f] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Problem
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        Payment gateways do not ship a billing system.
                    </h2>
                    <p class="mt-5 max-w-3xl text-base leading-7 text-white/70 sm:text-lg">
                        Teams building recurring revenue on African rails still rebuild the same fragile stack. Failure modes are expensive, and gateway lock-in turns every expansion into a rewrite.
                    </p>
                    <div class="mt-10 grid gap-4 sm:grid-cols-2">
                        @foreach ($problemPoints as $point)
                            <article class="border border-[#e07a5f]/35 bg-[#e07a5f]/10 p-5">
                                <h3 class="text-lg font-semibold">{{ $point['title'] }}</h3>
                                <p class="mt-2 text-sm leading-6 text-white/70">{{ $point['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 03 Solution --}}
            <section id="solution" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0f6e8c] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 w-1/2 bg-[linear-gradient(135deg,transparent,rgb(11_61_77_/_0.45))]"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-white px-3 py-1.5 text-sm font-semibold tracking-wide text-[#0f6e8c] uppercase">
                        Solution
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        A billing engine on the gateway you already use.
                    </h2>
                    <p class="mt-5 max-w-3xl text-base leading-7 text-white/80 sm:text-lg">
                        Bouclay is a multi-tenant billing engine with a developer API and merchant dashboard. Connect your gateway account, define plans and prices, and Bouclay runs the full subscription lifecycle. Funds settle to your merchant account. Bouclay never holds money and is not a merchant of record.
                    </p>
                    <div class="mt-10 grid gap-3 sm:grid-cols-2">
                        @foreach ($solutionCapabilities as $index => $item)
                            <article class="border border-white/15 bg-white/10 p-5 backdrop-blur-sm">
                                <p class="font-mono text-xs font-semibold text-[#e8a54b]">0{{ $index + 1 }} · {{ $item['title'] }}</p>
                                <p class="mt-2 text-sm leading-6 text-white/90">{{ $item['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 04 UVP --}}
            <section id="uvp" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#f7f8fa] px-6 pt-14 lg:px-8">
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#0b3d4d] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Unique value proposition
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] text-ink sm:text-5xl lg:text-6xl">
                        Recurly-grade subscriptions for African rails, without giving up your gateway or your revenue.
                    </h2>
                    <p class="mt-5 max-w-3xl text-base leading-7 text-muted-foreground sm:text-lg">
                        Gateway flexibility is the core advantage: the billing brain is processor-agnostic; only a thin adapter is gateway-specific. That means no lock-in, market choice, multi-gateway coverage, and a path to resilience across providers.
                    </p>
                    <div class="mt-10 grid gap-4 lg:grid-cols-3">
                        @foreach ($uvpPillars as $pillar)
                            <article class="{{ $pillar['tone'] }} p-6">
                                <h3 class="text-xl font-semibold tracking-tight">{{ $pillar['title'] }}</h3>
                                <p class="mt-3 text-sm leading-6 opacity-90">{{ $pillar['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 05 Competition --}}
            <section id="competition" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#12263a] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute bottom-0 left-0 size-96 bg-[radial-gradient(circle,rgb(94_196_224_/_0.2),transparent_60%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#5ec4e0] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        Competitive landscape
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        Bouclay sits in the gap.
                    </h2>
                    <p class="mt-5 max-w-3xl text-base leading-7 text-white/70 sm:text-lg">
                        The market splits into three groups. Bouclay is the only processor-agnostic billing layer built for African gateways that is neither gateway lock-in nor a merchant of record.
                    </p>
                    <div class="mt-10 grid gap-4">
                        @foreach ($competitors as $row)
                            <article class="grid gap-4 border border-white/10 bg-white/5 p-5 lg:grid-cols-[1.1fr_1.2fr_1.2fr]">
                                <div>
                                    <p class="text-base font-semibold text-[#5ec4e0]">{{ $row['group'] }}</p>
                                    <p class="mt-1 text-sm text-white/60">{{ $row['examples'] }}</p>
                                </div>
                                <div>
                                    <p class="font-mono text-[11px] tracking-wide text-white/45">THEIR LIMIT</p>
                                    <p class="mt-1 text-sm leading-6 text-white/75">{{ $row['limit'] }}</p>
                                </div>
                                <div>
                                    <p class="font-mono text-[11px] tracking-wide text-[#e8a54b]">BOUCLAY</p>
                                    <p class="mt-1 text-sm leading-6 text-white">{{ $row['bouclay'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 06 Market --}}
            <section id="market" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#e8f6fa] px-6 pt-14 lg:px-8">
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#0f6e8c] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Market
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] text-ink sm:text-5xl lg:text-6xl">
                        Software companies need billing that travels with their gateway.
                    </h2>
                    <div class="mt-10 grid gap-4 lg:grid-cols-3">
                        @foreach ($marketDrivers as $driver)
                            <article class="border border-[#0f6e8c]/20 bg-white p-6">
                                <h3 class="text-xl font-semibold text-[#0f6e8c]">{{ $driver['title'] }}</h3>
                                <p class="mt-3 text-sm leading-6 text-ink/70">{{ $driver['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <p class="mt-8 max-w-3xl text-sm leading-6 text-ink/65">
                        Position: the billing orchestration layer for gateway-diverse markets, starting with African SaaS and expanding wherever local processors outpace global billing suites.
                    </p>
                </div>
            </section>

            {{-- 07 Product --}}
            <section id="product" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0b0d12] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgb(15_110_140_/_0.3),transparent_40%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#e8a54b] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        Product
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        Production-ready recurring billing in hours, not weeks.
                    </h2>
                    <div class="mt-10 grid gap-4 sm:grid-cols-2">
                        @foreach ($productFeatures as $feature)
                            <article class="border border-white/10 bg-white/5 p-6">
                                <h3 class="text-lg font-semibold text-[#5ec4e0]">{{ $feature['label'] }}</h3>
                                <p class="mt-2 text-sm leading-6 text-white/70">{{ $feature['detail'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <p class="mt-8 max-w-3xl text-sm leading-6 text-white/55">
                        Stack: Laravel API and workers, React dashboard and customer portal, PostgreSQL, Redis, encrypted tenant credentials, HMAC webhooks, idempotent charges.
                    </p>
                </div>
            </section>

            {{-- 08 Model --}}
            <section id="model" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#f7f8fa] px-6 pt-14 lg:px-8">
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#e07a5f] px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Business model
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] text-ink sm:text-5xl lg:text-6xl">
                        Monetize orchestration, not settlement.
                    </h2>
                    <div class="mt-10 grid gap-4 lg:grid-cols-3">
                        @foreach ($modelPoints as $point)
                            <article class="border border-border bg-white p-6">
                                <h3 class="text-xl font-semibold text-ink">{{ $point['title'] }}</h3>
                                <p class="mt-3 text-sm leading-6 text-muted-foreground">{{ $point['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <div class="mt-8 border border-[#0f6e8c]/20 bg-[#e8f6fa] p-6">
                        <p class="text-sm font-medium text-ink">
                            Aligns incentives with integrators: we win when billing runs reliably on their rails, not by capturing their payment volume.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 09 Vision --}}
            <section id="vision" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#e8a54b] px-6 pt-14 text-ink lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute -bottom-20 -left-10 size-72 rounded-full bg-white/30 blur-3xl"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-ink px-3 py-1.5 text-sm font-semibold tracking-wide text-white uppercase">
                        Vision
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        Become the default billing layer for African payment rails.
                    </h2>
                    <div class="mt-10 grid gap-4 lg:grid-cols-3">
                        @foreach ($visionPhases as $phase)
                            <article class="{{ $phase['tone'] }} p-6">
                                <p class="text-sm font-semibold tracking-wide uppercase {{ $phase['label'] }}">{{ $phase['phase'] }}</p>
                                <p class="mt-3 text-base font-medium leading-7">{{ $phase['copy'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- 10 The ask --}}
            <section id="ask" class="relative flex min-h-dvh snap-start flex-col justify-center overflow-hidden bg-[#0b0d12] px-6 pt-14 text-white lg:px-8">
                <div aria-hidden="true" class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_70%_30%,rgb(15_110_140_/_0.35),transparent_45%),radial-gradient(circle_at_10%_80%,rgb(232_165_75_/_0.18),transparent_40%)]"></div>
                <div class="relative mx-auto w-full max-w-6xl py-10">
                    <p class="inline-flex rounded-md bg-[#e8a54b] px-3 py-1.5 text-sm font-semibold tracking-wide text-ink uppercase">
                        The ask
                    </p>
                    <h2 class="mt-6 max-w-4xl text-4xl font-semibold tracking-[-0.03em] sm:text-5xl lg:text-6xl">
                        Fund the path from working billing core to default integrator platform.
                    </h2>
                    <p class="mt-5 max-w-3xl text-base leading-7 text-white/75 sm:text-lg">
                        Capital expands gateway coverage, integrator go-to-market, product hardening, and the team to support early customers.
                        <span class="font-medium text-white">Milestone:</span> multiple production integrators on Bouclay with three gateway adapters live.
                    </p>
                    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($fundUses as $use)
                            <article class="border border-white/10 bg-white/5 p-5">
                                <p class="font-mono text-2xl font-semibold text-[#5ec4e0]">{{ $use['share'] }}</p>
                                <h3 class="mt-3 text-lg font-semibold">{{ $use['title'] }}</h3>
                                <p class="mt-2 text-sm leading-6 text-white/60">{{ $use['detail'] }}</p>
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
                    <p class="mt-12 text-sm text-white/45">
                        &copy; {{ now()->year }} Bouclay Inc. · Funds settle to your gateway. Bouclay never holds money.
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>
