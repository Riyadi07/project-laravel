@props([
    'label',
    'title',
    'description' => null,
])

<div class="mx-auto mb-12 max-w-2xl text-center">

    <span
        class="mb-3 inline-block text-sm font-semibold uppercase tracking-widest text-blue-600"
    >
        {{ $label }}
    </span>

    <h2
        class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl"
    >
        {{ $title }}
    </h2>

    @if ($description)

        <p class="mt-4 text-base leading-7 text-slate-600">
            {{ $description }}
        </p>

    @endif

</div>