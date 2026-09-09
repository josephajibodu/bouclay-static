@php
    $facts = [
        ['label' => 'Company', 'value' => 'Bouclay Inc.'],
        ['label' => 'Category', 'value' => 'Fintech infrastructure / developer tool'],
        ['label' => 'Audience', 'value' => 'African businesses and developers building recurring billing'],
        ['label' => 'First surface', 'value' => 'Website, then product UI and pitch deck'],
    ];

    $whatWeDo = 'Bouclay is a subscription management engine for businesses that sell on a recurring basis. It handles the entire lifecycle of a subscription (signups, recurring charges, failed-payment retries, upgrades/downgrades, cancellations) so businesses don\'t have to build that logic themselves.';

    $coreIdea = 'Normally, a developer who wants to accept recurring payments has to integrate separately with each payment processor (Nomba, Paystack, Flutterwave, and more) and handle their quirks individually. Bouclay removes that pain: integrate Bouclay once, and every supported payment gateway works out of the box. One connection in, every payment rail available.';

    $useCases = [
        'A SaaS company billing customers monthly or annually',
        'A creator platform offering paid memberships or subscriber tiers',
        'Any African business that wants to accept recurring payments without stitching together multiple payment gateway integrations itself',
    ];

    $positioning = [
        ['label' => 'Feel', 'copy' => 'Trustworthy, simple, "one connection, everything works": infrastructure that reduces complexity rather than adds to it.'],
        ['label' => 'Differentiator to consider visually', 'copy' => 'Unification: one entry point branching out to many gateways. A loop, a hub, or something that "closes the circle" could tie in nicely with the French meaning of the name (worth exploring, not a mandate).'],
    ];

    $openQuestions = [
        'Existing brand colors, if any: the palette below is what the current placeholder site happens to use, not a locked brand color system',
        'Preferred logo style: wordmark, icon + wordmark, or abstract mark are all on the table',
    ];

    $colors = [
        ['name' => 'Deep teal', 'hex' => '#0B3D4D'],
        ['name' => 'Ocean teal', 'hex' => '#0F6E8C'],
        ['name' => 'Sky', 'hex' => '#5EC4E0'],
        ['name' => 'Amber', 'hex' => '#E8A54B'],
        ['name' => 'Ink', 'hex' => '#0B0D12'],
    ];
@endphp

<x-layouts.site
    title="Logo design brief · Bouclay"
    description="Design brief for a new Bouclay logo: what Bouclay does, name origin, positioning, and open creative direction."
>
    <section class="relative flex flex-1 flex-col overflow-hidden">
        <div
            aria-hidden="true"
            class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_12%,rgb(15_110_140_/_0.12),transparent_42%),linear-gradient(180deg,#f7f8fa_0%,#eef1f6_55%,#f7f8fa_100%)]"
        ></div>

        <div class="mx-auto w-full max-w-4xl px-6 py-16 lg:px-8 lg:py-24">
            <p class="text-sm font-medium tracking-[0.22em] text-accent uppercase">Design brief</p>
            <h1 class="mt-5 text-4xl font-semibold tracking-[-0.04em] text-balance text-ink sm:text-5xl">
                Logo for Bouclay
            </h1>

            <dl class="mt-10 grid gap-4 border border-border bg-surface p-6 sm:grid-cols-2">
                @foreach ($facts as $fact)
                    <div>
                        <dt class="font-mono text-xs tracking-wide text-muted-foreground uppercase">{{ $fact['label'] }}</dt>
                        <dd class="mt-1 text-sm font-medium text-ink">{{ $fact['value'] }}</dd>
                    </div>
                @endforeach
            </dl>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">What it is</h2>
                <p class="mt-4 max-w-2xl text-base leading-7 text-muted-foreground">
                    {{ $whatWeDo }}
                </p>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">The core idea: one integration, every gateway</h2>
                <p class="mt-4 max-w-2xl text-base leading-7 text-muted-foreground">
                    {{ $coreIdea }}
                </p>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">Example use cases</h2>
                <ul class="mt-6 flex flex-col gap-3">
                    @foreach ($useCases as $item)
                        <li class="flex items-start gap-2.5 border border-border bg-surface p-4 text-sm leading-6 text-ink">
                            <x-icon name="check" class="mt-0.5 size-4 shrink-0 text-accent" />
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">Name origin</h2>
                <p class="mt-4 max-w-2xl text-base leading-7 text-muted-foreground">
                    Bouclay comes from the French word <span class="font-medium text-ink">&ldquo;bouclé,&rdquo;</span> the past participle of <em>boucler</em> (&ldquo;to loop / to buckle / to curl&rdquo;). As a noun, <em>une boucle</em> means &ldquo;a loop&rdquo; (also &ldquo;a curl&rdquo; or &ldquo;a buckle&rdquo;). The loop/cycle association is intentional and can be leaned on visually.
                </p>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">Positioning cues for the designer</h2>
                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    @foreach ($positioning as $item)
                        <article class="border border-border bg-surface p-5">
                            <h3 class="text-sm font-semibold text-ink">{{ $item['label'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-muted-foreground">{{ $item['copy'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="mt-16 border border-accent/30 bg-[#e8f6fa] p-6 sm:p-8">
                <p class="font-mono text-xs tracking-wide text-[#0f6e8c] uppercase">Creative freedom</p>
                <p class="mt-3 max-w-2xl text-sm leading-7 text-ink">
                    The logo needs to work well on a website. A wordmark, an icon + wordmark, an abstract mark, or something symbolic are all fair game. Express freely. The current placeholder mark shown in this site's header should not limit or inform the direction at all: treat it as if it doesn't exist.
                </p>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-semibold tracking-[-0.03em] text-ink">Still open</h2>
                <ul class="mt-6 flex flex-col gap-3">
                    @foreach ($openQuestions as $item)
                        <li class="flex items-start gap-2.5 text-sm leading-6 text-muted-foreground">
                            <span class="mt-1.5 size-1.5 shrink-0 rounded-full bg-[#e8a54b]"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-5">
                    @foreach ($colors as $color)
                        <div class="border border-border bg-surface">
                            <div class="h-14" style="background-color: {{ $color['hex'] }}"></div>
                            <div class="p-3">
                                <p class="text-sm font-medium text-ink">{{ $color['name'] }}</p>
                                <p class="font-mono text-xs text-muted-foreground">{{ $color['hex'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-16 border border-border bg-ink p-6 text-ink-foreground sm:p-8">
                <p class="font-mono text-xs tracking-wide text-white/50 uppercase">Questions</p>
                <p class="mt-3 text-sm leading-6 text-white/80">
                    Send drafts, questions, or scope-of-work discussion to
                    <a href="mailto:hello@bouclay.com" class="font-medium text-white underline underline-offset-4">hello@bouclay.com</a>.
                </p>
            </div>

            <div class="mt-12">
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                >
                    <x-icon name="arrow-right" class="size-4 rotate-180" />
                    Back to home
                </a>
            </div>
        </div>
    </section>
</x-layouts.site>
