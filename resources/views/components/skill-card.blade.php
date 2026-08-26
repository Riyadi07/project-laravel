@props([
    'name',
    'category',
    'icon',
])

<div
    {{ $attributes->merge([
        'class' => 'group relative overflow-hidden rounded-2xl border border-slate-800/80 bg-slate-900/60 p-3.5 sm:p-5 shadow-lg backdrop-blur-md transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-500/50 hover:bg-slate-900/90 hover:shadow-2xl hover:shadow-blue-600/20 h-full w-full'
    ]) }}
>
    <!-- Ambient Glow Background saat Hover -->
    <div
        class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-blue-600/10 opacity-0 blur-2xl transition duration-500 group-hover:opacity-100"
    ></div>

    <div class="relative flex items-center gap-2.5 sm:gap-4 h-full">

        {{-- Container Icon Tech --}}
        <div
            class="flex h-11 w-11 sm:h-14 sm:w-14 shrink-0 items-center justify-center rounded-xl border border-slate-800 bg-slate-950/80 transition-all duration-300 group-hover:border-blue-500/40 group-hover:bg-blue-600/10 group-hover:scale-105 shadow-inner"
        >
            <i class="{{ $icon }} text-2xl sm:text-3xl transition duration-300 group-hover:scale-110"></i>
        </div>

        {{-- Skill Information (Pencegah Teks Terpotong) --}}
        <div class="min-w-0 flex-1 overflow-hidden">
            <h3 class="text-xs sm:text-base font-bold text-white transition duration-300 group-hover:text-blue-400 leading-snug break-words">
                {{ $name }}
            </h3>

            <p class="mt-0.5 text-[10px] sm:text-xs font-medium text-slate-400 truncate">
                {{ $category }}
            </p>
        </div>

    </div>
</div>