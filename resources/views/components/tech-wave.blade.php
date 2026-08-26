<!-- <section class="relative overflow-hidden border-y border-slate-100 bg-white py-12 sm:py-14">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-blue-600">
                    Technology Focus
                </span>

                <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                    Technologies I work with
                </h2>
            </div>

            <p class="max-w-md text-sm leading-6 text-slate-500 sm:text-right">
                Teknologi yang saya gunakan dalam pengembangan aplikasi,
                pengolahan data, dan berbagai proyek yang saya kerjakan.
            </p>
        </div>

        {{-- Wave --}}
        <div class="relative">

            {{-- Background glow --}}
            <div class="absolute left-1/2 top-1/2 h-48 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-blue-100/50 blur-3xl">
            </div>

            {{-- SVG Wave --}}
            <div class="relative h-52 overflow-hidden sm:h-60">

                <svg
                    class="absolute inset-0 h-full w-full"
                    viewBox="0 0 1200 260"
                    fill="none"
                    preserveAspectRatio="none"
                    aria-hidden="true"
                >
                    <defs>
                        <linearGradient
                            id="techWaveGradient"
                            x1="0"
                            y1="0"
                            x2="1200"
                            y2="0"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop stop-color="#93c5fd"/>
                            <stop offset="0.5" stop-color="#2563eb"/>
                            <stop offset="1" stop-color="#bfdbfe"/>
                        </linearGradient>
                    </defs>

                    <path
                        d="M0 150
                           C120 80 200 80 300 135
                           C400 190 470 210 570 145
                           C670 80 750 55 850 115
                           C950 175 1050 195 1200 90"
                        stroke="url(#techWaveGradient)"
                        stroke-width="4"
                        stroke-linecap="round"
                    />

                    <path
                        d="M0 150
                           C120 80 200 80 300 135
                           C400 190 470 210 570 145
                           C670 80 750 55 850 115
                           C950 175 1050 195 1200 90"
                        stroke="#dbeafe"
                        stroke-width="14"
                        stroke-linecap="round"
                        opacity="0.45"
                    />
                </svg>

                {{-- Technology Points --}}
                @foreach ($items as $index => $item)

                    @php
                        $positions = [
                            'left-[5%] top-[45%]',
                            'left-[22%] top-[22%]',
                            'left-[38%] top-[61%]',
                            'left-[54%] top-[28%]',
                            'left-[70%] top-[39%]',
                            'left-[86%] top-[20%]',
                        ];

                        $position = $positions[$index % count($positions)];
                    @endphp

                    <div
                        class="group absolute {{ $position }} -translate-x-1/2 -translate-y-1/2"
                    >
                        {{-- Tooltip --}}
                        <div
                            class="pointer-events-none absolute bottom-full left-1/2 mb-3 w-max
                            -translate-x-1/2 translate-y-2 scale-95 opacity-0
                            rounded-xl border border-slate-200 bg-white px-4 py-3
                            shadow-xl transition-all duration-300
                            group-hover:translate-y-0 group-hover:scale-100 group-hover:opacity-100"
                        >
                            <p class="text-sm font-bold text-slate-900">
                                {{ $item['name'] }}
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                {{ $item['category'] }}
                            </p>
                        </div>

                        {{-- Point --}}
                        <div
                            class="relative flex h-12 w-12 items-center justify-center
                            rounded-2xl border border-blue-100 bg-white
                            text-blue-600 shadow-lg shadow-blue-100/60
                            transition-all duration-300
                            group-hover:-translate-y-2
                            group-hover:border-blue-300
                            group-hover:shadow-xl group-hover:shadow-blue-200/70"
                        >
                            <div class="absolute inset-1 rounded-xl bg-blue-50"></div>

                            <span class="relative text-sm font-bold">
                                {{ $index + 1 }}
                            </span>

                            {{-- Pulse --}}
                            <span
                                class="absolute inset-0 rounded-2xl border border-blue-300 opacity-0
                                transition-all duration-500
                                group-hover:scale-125 group-hover:opacity-30"
                            ></span>
                        </div>

                        {{-- Label --}}
                        <div
                            class="mt-3 whitespace-nowrap text-center text-xs font-semibold text-slate-600
                            transition-colors duration-300 group-hover:text-blue-600"
                        >
                            {{ $item['name'] }}
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        {{-- Bottom description --}}
        <div class="mt-2 flex items-center justify-center gap-2 text-xs text-slate-400">
            <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
            Hover setiap teknologi untuk melihat kategorinya
        </div>

    </div>
</section> -->