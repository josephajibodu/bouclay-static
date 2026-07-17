<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Bouclay is gateway-agnostic billing infrastructure for subscriptions, invoices, dunning, and webhooks."
        >
        <title>Bouclay: Billing infrastructure for modern software</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
        @php
            $navLinks = [
                ['label' => 'Platform', 'href' => '#platform'],
                ['label' => 'How it works', 'href' => '#workflow'],
                ['label' => 'Developers', 'href' => '#developers'],
            ];

            $capabilities = [
                [
                    'title' => 'Subscriptions',
                    'description' => 'Plans, prices, trials, pauses, resumes, and cancellations, without rebuilding the state machine.',
                ],
                [
                    'title' => 'Invoicing',
                    'description' => 'Generate invoices, collect through your gateway, and keep every attempt tied to the customer.',
                ],
                [
                    'title' => 'Dunning',
                    'description' => 'Retry windows, past-due states, and webhook events your product can react to in real time.',
                ],
                [
                    'title' => 'Webhooks',
                    'description' => 'Lifecycle events for renewals, failures, and cancellations delivered to your application.',
                ],
            ];

            $workflowSteps = [
                [
                    'title' => 'Connect a payment gateway',
                    'description' => 'Use the processor you already trust. Funds stay on your merchant account.',
                ],
                [
                    'title' => 'Model your catalog',
                    'description' => 'Define products, prices, and trial offers with recurring and one-off billing in mind.',
                ],
                [
                    'title' => 'Start subscriptions via API',
                    'description' => 'Create customers and subscriptions through a stable billing interface.',
                ],
                [
                    'title' => 'Stay in sync',
                    'description' => 'Drive entitlements from invoices, payments, renewals, and dunning events.',
                ],
            ];

            $pillars = [
                [
                    'eyebrow' => 'Gateway agnostic',
                    'title' => 'Bring your processor',
                    'description' => 'Bouclay orchestrates billing. Your payment gateway remains the source of truth for money movement.',
                ],
                [
                    'eyebrow' => 'API first',
                    'title' => 'Built for integrators',
                    'description' => 'Keys, docs, inbound webhooks, and outbound events are first-class, not bolted on later.',
                ],
                [
                    'eyebrow' => 'Multi-tenant',
                    'title' => 'Clean team boundaries',
                    'description' => 'Products, customers, subscriptions, and processor connections stay scoped to the right workspace.',
                ],
            ];
        @endphp

        <header class="sticky top-0 z-40 border-b border-border/70 bg-background/80 backdrop-blur-md">
            <div class="mx-auto flex h-16 w-full max-w-6xl items-center justify-between gap-6 px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-[0.95rem] font-semibold tracking-tight text-ink">
                    <span class="flex size-7 items-center justify-center text-accent">
                        <x-logo-icon class="size-full fill-current" />
                    </span>
                    <span>Bouclay</span>
                </a>

                <nav class="hidden items-center gap-7 text-sm text-muted-foreground md:flex">
                    @foreach ($navLinks as $link)
                        <a href="{{ $link['href'] }}" class="transition-colors hover:text-foreground">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                    <a href="/docs/api" class="transition-colors hover:text-foreground">Docs</a>
                </nav>

                <div class="flex items-center gap-2 text-sm">
                    <a
                        href="{{ route('login') }}"
                        class="hidden rounded-md px-3 py-2 text-muted-foreground transition-colors hover:text-foreground sm:inline-flex"
                    >
                        Log in
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

        <main>
            {{-- Hero: one composition: brand, headline, support, CTAs, full-bleed product surface --}}
            <section class="relative overflow-hidden">
                <div
                    aria-hidden="true"
                    class="mesh-drift pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_12%,rgb(15_110_140_/_0.14),transparent_42%),radial-gradient(circle_at_82%_8%,rgb(11_13_18_/_0.06),transparent_36%),linear-gradient(180deg,#f7f8fa_0%,#eef1f6_55%,#f7f8fa_100%)]"
                ></div>

                <div class="mx-auto w-full max-w-6xl px-6 pt-16 pb-10 lg:px-8 lg:pt-24 lg:pb-14">
                    <p class="hero-line text-sm font-medium tracking-[0.22em] text-accent uppercase">
                        Bouclay
                    </p>

                    <h1 class="hero-line mt-5 max-w-4xl text-4xl font-semibold tracking-[-0.04em] text-balance text-ink sm:text-5xl lg:text-[4rem] lg:leading-[1.05]" style="animation-delay: 80ms">
                        Billing infrastructure for software that ships.
                    </h1>

                    <p class="hero-line mt-6 max-w-2xl text-lg leading-8 text-muted-foreground" style="animation-delay: 160ms">
                        Subscriptions, invoices, dunning, and webhooks. Gateway-agnostic, API-first, ready for production.
                    </p>

                    <div class="hero-line mt-10 flex flex-col gap-3 sm:flex-row" style="animation-delay: 240ms">
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-ink px-5 py-3 text-sm font-medium text-ink-foreground transition-colors hover:bg-ink/90"
                        >
                            Create workspace
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                        <a
                            href="/docs/api"
                            class="inline-flex items-center justify-center rounded-md border border-border bg-surface px-5 py-3 text-sm font-medium text-foreground transition-colors hover:bg-muted"
                        >
                            Read the docs
                        </a>
                    </div>
                </div>

                <div class="hero-line mx-auto w-full max-w-6xl px-6 pb-20 lg:px-8 lg:pb-28" style="animation-delay: 320ms">
                    <div class="overflow-hidden border border-border bg-surface shadow-[0_24px_80px_-40px_rgb(11_13_18_/_0.45)]">
                        <div class="flex items-center justify-between border-b border-border px-5 py-3">
                            <div class="flex items-center gap-2">
                                <span class="size-2.5 rounded-[2px] bg-border"></span>
                                <span class="size-2.5 rounded-[2px] bg-border"></span>
                                <span class="size-2.5 rounded-[2px] bg-border"></span>
                            </div>
                            <p class="font-mono text-xs tracking-wide text-muted-foreground">dashboard.bouclay.com / subscriptions</p>
                            <span class="hidden text-xs text-muted-foreground sm:inline">live</span>
                        </div>

                        <div class="grid lg:grid-cols-[17rem_1fr]">
                            <aside class="hidden border-r border-border bg-muted/50 p-5 lg:block">
                                <p class="text-xs font-medium tracking-[0.18em] text-muted-foreground uppercase">Workspace</p>
                                <p class="mt-3 text-sm font-medium text-ink">Acme Cloud</p>
                                <nav class="mt-8 grid gap-1 text-sm text-muted-foreground">
                                    <span class="rounded-md bg-surface px-3 py-2 text-ink">Subscriptions</span>
                                    <span class="px-3 py-2">Customers</span>
                                    <span class="px-3 py-2">Invoices</span>
                                    <span class="px-3 py-2">Webhooks</span>
                                    <span class="px-3 py-2">API keys</span>
                                </nav>
                            </aside>

                            <div class="p-5 sm:p-8">
                                <div class="flex flex-wrap items-end justify-between gap-4">
                                    <div>
                                        <p class="text-sm text-muted-foreground">Active subscription</p>
                                        <h2 class="mt-1 text-2xl font-semibold tracking-tight text-ink">Growth Plan</h2>
                                    </div>
                                    <span class="inline-flex items-center gap-2 border border-border bg-muted px-3 py-1.5 text-xs font-medium text-foreground">
                                        <span class="size-1.5 bg-accent"></span>
                                        Active
                                    </span>
                                </div>

                                <div class="mt-8 grid gap-px overflow-hidden border border-border bg-border sm:grid-cols-3">
                                    <div class="bg-surface p-4">
                                        <p class="text-xs text-muted-foreground">Processor</p>
                                        <p class="mt-2 text-sm font-medium text-ink">Your gateway</p>
                                    </div>
                                    <div class="bg-surface p-4">
                                        <p class="text-xs text-muted-foreground">Cadence</p>
                                        <p class="mt-2 text-sm font-medium text-ink">$49 / month</p>
                                    </div>
                                    <div class="bg-surface p-4">
                                        <p class="text-xs text-muted-foreground">Next event</p>
                                        <p class="mt-2 font-mono text-sm font-medium text-ink">subscription.renewed</p>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <p class="text-sm font-medium text-ink">Renewal pipeline</p>
                                    <ol class="mt-4 grid gap-3">
                                        @foreach (['Invoice generated', 'Payment attempted', 'Webhook delivered'] as $index => $step)
                                            <li class="flex items-center gap-3 text-sm text-muted-foreground">
                                                <span class="flex size-6 items-center justify-center border border-border bg-muted font-mono text-[11px] text-ink">
                                                    0{{ $index + 1 }}
                                                </span>
                                                <span class="text-foreground">{{ $step }}</span>
                                                <span class="ml-auto hidden text-accent sm:inline">
                                                    <x-icon name="check" class="size-3.5" />
                                                </span>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="border-y border-border bg-surface">
                <div class="mx-auto flex w-full max-w-6xl flex-col gap-4 px-6 py-8 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
                    <p class="reveal font-medium text-foreground">Gateway-agnostic by design</p>
                    <p class="reveal reveal-delay-1 max-w-2xl leading-6">
                        Keep your payment processor. Bouclay owns the subscription lifecycle your product depends on.
                    </p>
                </div>
            </section>

            <section id="platform" class="mx-auto w-full max-w-6xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="reveal max-w-2xl">
                    <p class="text-sm font-medium tracking-[0.2em] text-accent uppercase">Platform</p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-[-0.03em] text-ink sm:text-4xl">
                        One billing layer. Any gateway.
                    </h2>
                    <p class="mt-5 text-lg leading-8 text-muted-foreground">
                        Stop rebuilding catalog, renewals, and dunning around payment primitives. Ship the product; let Bouclay run the billing system.
                    </p>
                </div>

                <div class="mt-14 grid gap-10 border-t border-border pt-10 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($capabilities as $index => $capability)
                        <article class="reveal {{ $index === 1 ? 'reveal-delay-1' : ($index === 2 ? 'reveal-delay-2' : '') }}">
                            <p class="font-mono text-xs tracking-wide text-muted-foreground">0{{ $index + 1 }}</p>
                            <h3 class="mt-4 text-lg font-semibold tracking-tight text-ink">{{ $capability['title'] }}</h3>
                            <p class="mt-3 text-sm leading-6 text-muted-foreground">{{ $capability['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="workflow" class="border-y border-border bg-surface">
                <div class="mx-auto grid w-full max-w-6xl gap-12 px-6 py-20 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-28">
                    <div class="reveal">
                        <p class="text-sm font-medium tracking-[0.2em] text-accent uppercase">How it works</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-[-0.03em] text-ink sm:text-4xl">
                            From gateway to entitlements in four steps.
                        </h2>
                        <p class="mt-5 text-lg leading-8 text-muted-foreground">
                            Your processor moves money. Bouclay manages the subscription state your application needs to stay accurate.
                        </p>
                    </div>

                    <ol class="reveal reveal-delay-1 grid gap-0 border-l border-border">
                        @foreach ($workflowSteps as $index => $step)
                            <li class="relative grid gap-2 border-b border-border py-6 pl-8 last:border-b-0">
                                <span class="absolute top-7 -left-[0.4rem] size-3 border border-border bg-background"></span>
                                <p class="font-mono text-xs tracking-wide text-muted-foreground">Step 0{{ $index + 1 }}</p>
                                <h3 class="text-lg font-semibold tracking-tight text-ink">{{ $step['title'] }}</h3>
                                <p class="text-sm leading-6 text-muted-foreground">{{ $step['description'] }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="reveal max-w-2xl">
                    <p class="text-sm font-medium tracking-[0.2em] text-accent uppercase">Principles</p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-[-0.03em] text-ink sm:text-4xl">
                        Designed for teams that care about the edges.
                    </h2>
                </div>

                <div class="mt-14 grid gap-8 lg:grid-cols-3">
                    @foreach ($pillars as $index => $pillar)
                        <article class="reveal {{ $index === 1 ? 'reveal-delay-1' : ($index === 2 ? 'reveal-delay-2' : '') }} border-t border-border pt-6">
                            <p class="text-xs font-medium tracking-[0.18em] text-muted-foreground uppercase">
                                {{ $pillar['eyebrow'] }}
                            </p>
                            <h3 class="mt-4 text-xl font-semibold tracking-tight text-ink">{{ $pillar['title'] }}</h3>
                            <p class="mt-3 text-sm leading-6 text-muted-foreground">{{ $pillar['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="developers" class="border-y border-border bg-ink text-ink-foreground">
                <div class="mx-auto grid w-full max-w-6xl gap-12 px-6 py-20 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-28">
                    <div class="reveal">
                        <p class="text-sm font-medium tracking-[0.2em] text-accent uppercase">Developers</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-[-0.03em] sm:text-4xl">
                            A billing API that feels like infrastructure.
                        </h2>
                        <p class="mt-5 text-lg leading-8 text-white/65">
                            Create customers, attach prices, start subscriptions, and listen for lifecycle events without coupling your product to a single payment gateway.
                        </p>
                        <a
                            href="/docs/api"
                            class="mt-8 inline-flex items-center gap-2 text-sm font-medium text-white transition-opacity hover:opacity-80"
                        >
                            Explore the API docs
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                    </div>

                    <div class="reveal reveal-delay-1 overflow-hidden border border-white/10 bg-[#12151c]">
                        <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">
                            <p class="font-mono text-xs text-white/45">create-subscription.sh</p>
                            <p class="font-mono text-xs text-accent">POST /v1/subscriptions</p>
                        </div>
                        <pre class="overflow-x-auto p-5 font-mono text-[13px] leading-6 text-white/80"><code>curl https://api.bouclay.com/v1/subscriptions \
  -H "Authorization: Bearer $BOUCLAY_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "customer_id": "cus_9f2a",
    "price_id": "price_growth_monthly",
    "trial_days": 14
  }'</code></pre>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="reveal grid gap-8 border border-border bg-surface p-8 sm:p-12 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <h2 class="max-w-2xl text-3xl font-semibold tracking-[-0.03em] text-ink sm:text-4xl">
                            Launch recurring revenue without turning your product team into a billing team.
                        </h2>
                        <p class="mt-4 max-w-xl text-muted-foreground">
                            Start with a workspace, connect a gateway, and ship subscriptions through one integration.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-ink px-5 py-3 text-sm font-medium text-ink-foreground transition-colors hover:bg-ink/90"
                        >
                            Get started
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                        <a
                            href="/docs/api"
                            class="inline-flex items-center justify-center rounded-md border border-border px-5 py-3 text-sm font-medium text-foreground transition-colors hover:bg-muted"
                        >
                            Read the docs
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-border bg-surface">
            <div class="mx-auto grid w-full max-w-6xl gap-10 px-6 py-14 md:grid-cols-[1.4fr_1fr_1fr_1fr] lg:px-8">
                <div>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 font-semibold tracking-tight text-ink">
                        <span class="flex size-7 items-center justify-center text-accent">
                            <x-logo-icon class="size-full fill-current" />
                        </span>
                        <span>Bouclay</span>
                    </a>
                    <p class="mt-4 max-w-xs text-sm leading-6 text-muted-foreground">
                        Billing infrastructure for modern software companies: subscriptions, invoices, dunning, and webhooks.
                    </p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold text-ink">Product</h2>
                    <nav class="mt-4 grid gap-3 text-sm text-muted-foreground">
                        <a href="#platform" class="transition-colors hover:text-foreground">Platform</a>
                        <a href="#workflow" class="transition-colors hover:text-foreground">How it works</a>
                        <a href="#developers" class="transition-colors hover:text-foreground">Developers</a>
                    </nav>
                </div>

                <div>
                    <h2 class="text-sm font-semibold text-ink">Build</h2>
                    <nav class="mt-4 grid gap-3 text-sm text-muted-foreground">
                        <a href="/docs/api" class="transition-colors hover:text-foreground">API docs</a>
                        <a href="{{ route('login') }}" class="transition-colors hover:text-foreground">Log in</a>
                        <a href="{{ route('register') }}" class="transition-colors hover:text-foreground">Create workspace</a>
                    </nav>
                </div>

                <div>
                    <h2 class="text-sm font-semibold text-ink">Company</h2>
                    <nav class="mt-4 grid gap-3 text-sm text-muted-foreground">
                        <span>San Francisco</span>
                        <a href="mailto:hello@bouclay.com" class="transition-colors hover:text-foreground">hello@bouclay.com</a>
                    </nav>
                </div>
            </div>

            <div class="mx-auto flex w-full max-w-6xl flex-col gap-3 border-t border-border px-6 py-5 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <p>&copy; {{ now()->year }} Bouclay Inc.</p>
                <p>Your gateway handles payments. Bouclay handles billing logic.</p>
            </div>
        </footer>
    </body>
</html>
