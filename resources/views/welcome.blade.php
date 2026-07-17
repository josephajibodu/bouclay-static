<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bouclay - Recurring billing on Nomba</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @php
            $capabilities = [
                [
                    'title' => 'Subscription engine',
                    'description' => 'Create plans, attach prices, manage trials, billing cycles, pauses, resumes, and cancellations without rebuilding the state machine.',
                    'icon' => 'repeat-2',
                ],
                [
                    'title' => 'Invoices and payments',
                    'description' => 'Generate invoice records, collect through Nomba checkout and charge APIs, and keep every payment attempt tied to the customer.',
                    'icon' => 'file-text',
                ],
                [
                    'title' => 'Dunning and retries',
                    'description' => 'Handle failed charges with retry windows, past-due states, and webhook events your product can react to in real time.',
                    'icon' => 'refresh-ccw',
                ],
            ];

            $workflowSteps = [
                [
                    'title' => 'Connect your own Nomba account',
                    'description' => 'Store encrypted processor keys per team and keep funds moving through your account.',
                ],
                [
                    'title' => 'Create products, prices, and trial offers',
                    'description' => 'Model what you sell with recurring, one-off, and trial-aware catalog data.',
                ],
                [
                    'title' => 'Start subscriptions through the Bouclay API',
                    'description' => 'Let your app create customers and subscriptions through a stable billing API.',
                ],
                [
                    'title' => 'Receive lifecycle events in your app',
                    'description' => 'Sync entitlements from invoices, payments, renewals, cancellations, and dunning events.',
                ],
            ];

            $productPillars = [
                [
                    'eyebrow' => 'BYOK payments',
                    'title' => 'Your Nomba keys, your money flow',
                    'description' => 'Bouclay coordinates billing while Nomba remains the payment processor. Merchant funds stay on your Nomba setup.',
                    'icon' => 'key-round',
                ],
                [
                    'eyebrow' => 'API-first',
                    'title' => 'Built for integrators',
                    'description' => 'Typed dashboard flows, public API docs, API keys, inbound webhooks, and outbound events are first-class from day one.',
                    'icon' => 'webhook',
                ],
                [
                    'eyebrow' => 'Multi-tenant',
                    'title' => 'Clean team boundaries',
                    'description' => 'Every product, customer, subscription, invoice, payment, webhook, and processor connection is scoped to the right team.',
                    'icon' => 'shield-check',
                ],
            ];

            $renewalTimeline = [
                'Invoice generated',
                'Payment attempted',
                'Webhook delivered',
            ];

            $billingPreviewTransform = 'rotateX(46deg) rotateY(-5deg) rotateZ(-5deg) translate3d(0, 0.75rem, 0)';
        @endphp

        <main class="relative min-h-screen overflow-hidden bg-background text-foreground">
            <div class="absolute inset-x-0 top-0 -z-10 h-[42rem] bg-[radial-gradient(circle_at_top_left,oklch(0.52_0.105_223.128_/_0.18),transparent_34rem),linear-gradient(180deg,oklch(0.985_0.001_106.423),transparent)] dark:bg-[radial-gradient(circle_at_top_left,oklch(0.715_0.143_215.221_/_0.2),transparent_34rem),linear-gradient(180deg,oklch(0.216_0.006_56.043),transparent)]"></div>

            <header class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-6 py-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2 font-semibold tracking-tight">
                    <span class="flex size-6 items-center justify-center rounded-lg text-primary">
                        <x-logo-icon class="size-full fill-current" />
                    </span>
                    <span>Bouclay</span>
                </a>

                <nav class="flex items-center gap-2 text-sm">
                    <a
                        href="/docs/api"
                        class="hidden rounded-md px-3 py-2 text-muted-foreground transition-colors hover:text-foreground sm:inline-flex"
                    >
                        API docs
                    </a>
                    <a
                        href="/login"
                        class="rounded-md px-3 py-2 text-muted-foreground transition-colors hover:text-foreground"
                    >
                        Log in
                    </a>
                    <a
                        href="/register"
                        class="inline-flex items-center gap-2 rounded-md bg-primary px-4 py-2 font-medium text-primary-foreground shadow-sm transition-colors hover:bg-primary/90"
                    >
                        Start building
                        <x-icon name="arrow-right" class="size-4" />
                    </a>
                </nav>
            </header>

            <section class="mx-auto grid w-full max-w-7xl gap-12 px-6 py-10 lg:grid-cols-[minmax(0,1fr)_28rem] lg:items-center lg:px-8 lg:py-16">
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-semibold tracking-tight text-balance sm:text-6xl">
                        Stop rebuilding subscriptions around payment primitives.
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-muted-foreground">
                        Bouclay sits on top of your Nomba account and gives your product catalog, subscriptions, invoices, dunning, and webhooks through one integration.
                    </p>

                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        <a
                            href="/register"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-5 py-3 text-sm font-medium text-primary-foreground shadow-sm transition-colors hover:bg-primary/90"
                        >
                            Create your workspace
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                        <a
                            href="/docs/api"
                            class="inline-flex items-center justify-center rounded-md border bg-background px-5 py-3 text-sm font-medium shadow-sm transition-colors hover:bg-accent"
                        >
                            Read the API docs
                        </a>
                    </div>
                </div>

                <aside class="group relative min-h-[38rem] [perspective:1200px]">
                    <div class="absolute inset-x-10 bottom-12 h-20 rounded-full bg-primary/20 blur-3xl transition-opacity duration-500 group-hover:opacity-80"></div>
                    <div class="absolute inset-x-8 bottom-20 h-28 rounded-[50%] bg-zinc-950/10 blur-2xl dark:bg-black/40"></div>

                    <div
                        class="relative rounded-3xl border bg-card p-4 shadow-2xl shadow-primary/10 [transform-style:preserve-3d]"
                        style="transform: {{ $billingPreviewTransform }}"
                    >
                        <div class="absolute inset-x-8 -bottom-5 h-8 [transform:translateZ(-2.5rem)] rounded-b-3xl border-x border-b bg-card/80 shadow-xl"></div>
                        <div class="absolute inset-y-6 -right-4 w-6 [transform:rotateY(78deg)_translateZ(-0.35rem)] rounded-r-2xl border-y border-r bg-muted shadow-md"></div>

                        <div class="relative [transform:translateZ(2rem)] rounded-2xl border bg-background p-5 [transform-style:preserve-3d]">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-sm text-muted-foreground">Subscription</p>
                                    <p class="mt-1 font-semibold">Growth Plan</p>
                                </div>
                                <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-sm font-medium text-emerald-700 dark:text-emerald-300">
                                    active
                                </span>
                            </div>

                            <div class="mt-6 grid gap-3 [transform-style:preserve-3d]">
                                <div class="group/metric relative flex [transform:translate3d(0,0,0)] items-center gap-3 rounded-xl border bg-card p-3 shadow-sm transition-[transform,box-shadow,border-color] duration-500 ease-out [will-change:transform] [backface-visibility:hidden] [transform-style:preserve-3d] hover:[transform:translate3d(0,-0.35rem,1.35rem)_scale(1.015)] hover:border-primary/25 hover:shadow-lg hover:shadow-primary/10">
                                    <span
                                        aria-hidden="true"
                                        class="pointer-events-none absolute inset-x-3 -bottom-1.5 h-2 [transform:translateZ(-0.7rem)] rounded-b-xl border-x border-b bg-muted/80 opacity-40 shadow-sm transition-opacity duration-500 group-hover/metric:opacity-70"
                                    ></span>
                                    <span class="relative flex size-9 items-center justify-center rounded-lg bg-accent text-primary transition-transform duration-500 ease-out group-hover/metric:[transform:translateZ(0.45rem)]">
                                        <x-icon name="credit-card" class="size-4" />
                                    </span>
                                    <div class="relative">
                                        <p class="text-xs text-muted-foreground">Payment processor</p>
                                        <p class="text-sm font-medium">Nomba checkout</p>
                                    </div>
                                </div>

                                <div class="group/metric relative flex [transform:translate3d(0,0,0)] items-center gap-3 rounded-xl border bg-card p-3 shadow-sm transition-[transform,box-shadow,border-color] duration-500 ease-out [will-change:transform] [backface-visibility:hidden] [transform-style:preserve-3d] hover:[transform:translate3d(0,-0.35rem,1.35rem)_scale(1.015)] hover:border-primary/25 hover:shadow-lg hover:shadow-primary/10">
                                    <span
                                        aria-hidden="true"
                                        class="pointer-events-none absolute inset-x-3 -bottom-1.5 h-2 [transform:translateZ(-0.7rem)] rounded-b-xl border-x border-b bg-muted/80 opacity-40 shadow-sm transition-opacity duration-500 group-hover/metric:opacity-70"
                                    ></span>
                                    <span class="relative flex size-9 items-center justify-center rounded-lg bg-accent text-primary transition-transform duration-500 ease-out group-hover/metric:[transform:translateZ(0.45rem)]">
                                        <x-icon name="activity" class="size-4" />
                                    </span>
                                    <div class="relative">
                                        <p class="text-xs text-muted-foreground">Billing cadence</p>
                                        <p class="text-sm font-medium">NGN 45,000 / month</p>
                                    </div>
                                </div>

                                <div class="group/metric relative flex [transform:translate3d(0,0,0)] items-center gap-3 rounded-xl border bg-card p-3 shadow-sm transition-[transform,box-shadow,border-color] duration-500 ease-out [will-change:transform] [backface-visibility:hidden] [transform-style:preserve-3d] hover:[transform:translate3d(0,-0.35rem,1.35rem)_scale(1.015)] hover:border-primary/25 hover:shadow-lg hover:shadow-primary/10">
                                    <span
                                        aria-hidden="true"
                                        class="pointer-events-none absolute inset-x-3 -bottom-1.5 h-2 [transform:translateZ(-0.7rem)] rounded-b-xl border-x border-b bg-muted/80 opacity-40 shadow-sm transition-opacity duration-500 group-hover/metric:opacity-70"
                                    ></span>
                                    <span class="relative flex size-9 items-center justify-center rounded-lg bg-accent text-primary transition-transform duration-500 ease-out group-hover/metric:[transform:translateZ(0.45rem)]">
                                        <x-icon name="webhook" class="size-4" />
                                    </span>
                                    <div class="relative">
                                        <p class="text-xs text-muted-foreground">Next event</p>
                                        <p class="text-sm font-medium">subscription.renewed</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 rounded-xl border border-dashed p-4">
                                <p class="text-sm font-medium">Renewal timeline</p>
                                <div class="mt-4 grid gap-3">
                                    @foreach ($renewalTimeline as $item)
                                        <div class="flex items-center gap-3 text-sm">
                                            <span class="flex size-5 items-center justify-center rounded-full bg-primary text-primary-foreground">
                                                <x-icon name="check" class="size-3" />
                                            </span>
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>

            <section id="capabilities" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="grid gap-4 md:grid-cols-3">
                    @foreach ($capabilities as $capability)
                        <article class="rounded-2xl border bg-card p-6 shadow-sm">
                            <span class="flex size-11 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <x-icon :name="$capability['icon']" class="size-5" />
                            </span>
                            <h2 class="mt-5 text-lg font-semibold">{{ $capability['title'] }}</h2>
                            <p class="mt-3 text-sm leading-6 text-muted-foreground">
                                {{ $capability['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section
                id="workflow"
                class="mx-auto grid w-full max-w-7xl gap-8 px-6 py-16 lg:grid-cols-[0.9fr_1.1fr] lg:px-8"
            >
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-primary uppercase">
                        How it works
                    </p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight">
                        One billing layer between Nomba and your product.
                    </h2>
                    <p class="mt-4 text-muted-foreground">
                        Nomba handles payment primitives. Bouclay handles the subscription lifecycle your app needs to stay in sync.
                    </p>
                </div>

                <div class="rounded-2xl border bg-card p-6 shadow-sm">
                    <ol class="grid gap-4">
                        @foreach ($workflowSteps as $index => $step)
                            <li class="flex items-start gap-4 rounded-xl border bg-background p-4">
                                <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-primary/10 text-sm font-semibold text-primary">
                                    {{ $index + 1 }}
                                </span>
                                <div>
                                    <p class="font-medium">{{ $step['title'] }}</p>
                                    <p class="mt-1 text-sm text-muted-foreground">
                                        {{ $step['description'] }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </section>

            <section id="platform" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="grid gap-4 lg:grid-cols-3">
                    @foreach ($productPillars as $pillar)
                        <article class="rounded-2xl border bg-card p-6 shadow-sm">
                            <div class="flex items-center gap-3">
                                <span class="flex size-10 items-center justify-center rounded-lg bg-accent text-primary">
                                    <x-icon :name="$pillar['icon']" class="size-5" />
                                </span>
                                <p class="text-xs font-medium tracking-[0.22em] text-muted-foreground uppercase">
                                    {{ $pillar['eyebrow'] }}
                                </p>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold tracking-tight">
                                {{ $pillar['title'] }}
                            </h3>
                            <p class="mt-3 text-sm leading-6 text-muted-foreground">
                                {{ $pillar['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-8">
                <div class="overflow-hidden rounded-3xl border bg-primary text-primary-foreground shadow-sm">
                    <div class="grid gap-8 p-8 lg:grid-cols-[1fr_auto] lg:items-center lg:p-10">
                        <div>
                            <p class="text-sm font-medium tracking-[0.24em] uppercase opacity-70">
                                For African internet businesses
                            </p>
                            <h2 class="mt-4 max-w-2xl text-3xl font-semibold tracking-tight">
                                Launch recurring revenue without turning your product team into a billing team.
                            </h2>
                        </div>
                        <a
                            href="/register"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary-foreground px-5 py-3 text-sm font-medium text-primary shadow-sm transition-colors hover:bg-primary-foreground/90"
                        >
                            Get started
                            <x-icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>
            </section>

            <footer class="border-t bg-card/60">
                <div class="mx-auto grid w-full max-w-7xl gap-8 px-6 py-10 md:grid-cols-[1.2fr_1fr_1fr] lg:px-8">
                    <div>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-3 font-semibold tracking-tight">
                            <span class="flex size-9 items-center justify-center rounded-lg bg-primary p-2 text-primary-foreground shadow-sm">
                                <x-logo-icon class="size-full fill-current" />
                            </span>
                            <span>Bouclay</span>
                        </a>
                        <p class="mt-4 max-w-sm text-sm leading-6 text-muted-foreground">
                            A managed subscription, invoicing, and dunning layer for teams building on Nomba.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-sm font-semibold">Product</h2>
                        <nav class="mt-4 grid gap-3 text-sm text-muted-foreground">
                            <a href="#capabilities" class="transition-colors hover:text-foreground">Capabilities</a>
                            <a href="#workflow" class="transition-colors hover:text-foreground">How it works</a>
                            <a href="#platform" class="transition-colors hover:text-foreground">Platform</a>
                        </nav>
                    </div>

                    <div>
                        <h2 class="text-sm font-semibold">Build</h2>
                        <nav class="mt-4 grid gap-3 text-sm text-muted-foreground">
                            <a href="/docs/api" class="transition-colors hover:text-foreground">API docs</a>
                            <a href="/login" class="transition-colors hover:text-foreground">Log in</a>
                            <a href="/register" class="transition-colors hover:text-foreground">Create workspace</a>
                        </nav>
                    </div>
                </div>

                <div class="mx-auto flex w-full max-w-7xl flex-col gap-3 border-t px-6 py-5 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
                    <p>&copy; {{ now()->year }} Bouclay.</p>
                    <p>Nomba handles payments. Bouclay handles billing logic.</p>
                </div>
            </footer>
        </main>
    </body>
</html>
