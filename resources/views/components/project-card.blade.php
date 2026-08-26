@props([
    'id',
    'title',
    'shortDescription',
    'fullDescription',
    'thumbnail',
    'images' => [],
    'technologies' => [],
    'github' => null,
    'demo' => null,
])

<article 
    onclick="openProjectModal('{{ $id }}')"
    class="group relative flex flex-col justify-between overflow-hidden rounded-2xl border border-slate-800/80 bg-slate-950/20 p-3 sm:p-4 transition duration-300 hover:-translate-y-1 hover:border-blue-500/50 hover:bg-slate-900/40 hover:shadow-xl hover:shadow-blue-600/10 cursor-pointer"
>
    <div>
        {{-- Thumbnail Image --}}
        <div class="relative aspect-video overflow-hidden rounded-xl border border-slate-800 bg-slate-900">
           <img
                src="{{ asset('images/' . $thumbnail) }}"
                alt="{{ $title }}"
                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 transition duration-300 group-hover:opacity-100 flex items-end p-3">
                <span class="text-[11px] font-semibold text-blue-400 flex items-center gap-1">
                    Lihat Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </span>
            </div>
        </div>

        {{-- Project Content (Ringkas Max 2 Baris) --}}
        <div class="mt-3">
            <h3 class="text-sm font-bold text-white sm:text-base transition duration-300 group-hover:text-blue-400 line-clamp-1">
                {{ $title }}
            </h3>

            <p class="mt-1 line-clamp-2 text-xs leading-relaxed text-slate-400">
                {{ $shortDescription }}
            </p>
        </div>
    </div>

    {{-- Tech Stack Pills --}}
    @if (count($technologies))
        <div class="mt-3 flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/60">
            @foreach (array_slice($technologies, 0, 3) as $tech)
                <span class="rounded-md bg-blue-500/10 border border-blue-500/20 px-2 py-0.5 text-[10px] font-medium text-blue-400">
                    {{ $tech }}
                </span>
            @endforeach
            @if(count($technologies) > 3)
                <span class="text-[10px] text-slate-500 self-center">+{{ count($technologies) - 3 }}</span>
            @endif
        </div>
    @endif
</article>

{{-- Hidden Modal Element Template untuk JavaScript --}}
<template id="template-{{ $id }}">
    <div class="project-modal-data"
        data-title="{{ $title }}"
        data-description="{{ $fullDescription }}"
        data-images='@json($images)'
        data-technologies='@json($technologies)'
        data-github="{{ $github }}"
        data-demo="{{ $demo }}"
    ></div>
</template>