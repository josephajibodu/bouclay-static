@props([
    'name',
    'class' => 'size-4',
])

@php
    $icons = [
        'arrow-right' => [
            ['path', ['d' => 'M5 12h14']],
            ['path', ['d' => 'm12 5 7 7-7 7']],
        ],
        'check' => [
            ['path', ['d' => 'M20 6 9 17l-5-5']],
        ],
        'credit-card' => [
            ['rect', ['width' => '20', 'height' => '14', 'x' => '2', 'y' => '5', 'rx' => '2']],
            ['line', ['x1' => '2', 'x2' => '22', 'y1' => '10', 'y2' => '10']],
        ],
        'activity' => [
            ['path', ['d' => 'M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2']],
        ],
        'webhook' => [
            ['path', ['d' => 'M18 16.98h-5.99c-1.1 0-1.95.94-2.48 1.9A4 4 0 0 1 2 17c.01-.7.2-1.4.57-2']],
            ['path', ['d' => 'm6 17 3.13-5.78c.53-.97.1-2.18-.5-3.1a4 4 0 1 1 6.89-4.06']],
            ['path', ['d' => 'm12 6 3.13 5.73C15.66 12.7 16.9 13 18 13a4 4 0 0 1 0 8']],
        ],
        'file-text' => [
            ['path', ['d' => 'M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z']],
            ['path', ['d' => 'M14 2v4a2 2 0 0 0 2 2h4']],
            ['path', ['d' => 'M10 9H8']],
            ['path', ['d' => 'M16 13H8']],
            ['path', ['d' => 'M16 17H8']],
        ],
        'refresh-ccw' => [
            ['path', ['d' => 'M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8']],
            ['path', ['d' => 'M3 3v5h5']],
            ['path', ['d' => 'M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16']],
            ['path', ['d' => 'M16 16h5v5']],
        ],
        'repeat-2' => [
            ['path', ['d' => 'm2 9 3-3 3 3']],
            ['path', ['d' => 'M13 18H7a2 2 0 0 1-2-2V6']],
            ['path', ['d' => 'm22 15-3 3-3-3']],
            ['path', ['d' => 'M11 6h6a2 2 0 0 1 2 2v10']],
        ],
        'key-round' => [
            ['path', ['d' => 'M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z']],
            ['circle', ['cx' => '16.5', 'cy' => '7.5', 'r' => '.5', 'fill' => 'currentColor']],
        ],
        'shield-check' => [
            ['path', ['d' => 'M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z']],
            ['path', ['d' => 'm9 12 2 2 4-4']],
        ],
    ];

    $nodes = $icons[$name] ?? [];
@endphp

<svg
    {{ $attributes->merge(['class' => $class]) }}
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
>
    @foreach ($nodes as [$tag, $attrs])
        <{{ $tag }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach />
    @endforeach
</svg>
