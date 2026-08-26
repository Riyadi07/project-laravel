<nav
    id="navbar"
    class="fixed top-0 left-0 right-0 z-50 border-b border-slate-800/80 bg-slate-950/70 backdrop-blur-md transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- Logo Estetik --}}
            <a href="#home" class="group relative flex items-center gap-3 py-1">
                <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400 opacity-30 blur-lg transition duration-500 group-hover:opacity-100 group-hover:blur-xl"></div>
                <div class="relative flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-blue-400/40 bg-slate-900/90 shadow-lg shadow-blue-500/20 backdrop-blur-md transition duration-500 group-hover:scale-110 group-hover:border-blue-400 group-hover:bg-blue-600/20">
                    <span class="font-mono text-base font-black tracking-tighter text-transparent bg-clip-text bg-gradient-to-tr from-blue-400 via-cyan-300 to-white">SR</span>
                </div>
                <div class="relative flex items-center font-extrabold tracking-wider text-2xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-200 to-slate-400 transition duration-300 group-hover:from-blue-400 group-hover:to-cyan-300">Riyadi</span>
                </div>
            </a>

            {{-- Desktop Navigation (Ditambahkan px-4 py-2 agar berbentuk kotak) --}}
            <div class="hidden items-center gap-2 md:flex">
                <a href="#home" class="nav-link rounded-lg px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-slate-800/60 hover:text-blue-400">
                    Home
                </a>
                <a href="#about" class="nav-link rounded-lg px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-slate-800/60 hover:text-blue-400">
                    About
                </a>
                <a href="#skills" class="nav-link rounded-lg px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-slate-800/60 hover:text-blue-400">
                    Skills
                </a>
                <a href="#projects" class="nav-link rounded-lg px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-slate-800/60 hover:text-blue-400">
                    Projects
                </a>
                <a
                    href="#contact"  class="nav-link rounded-lg px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-slate-800/60 hover:text-blue-400">
                    Contact
                </a>
            </div>

            {{-- Mobile Button --}}
            <button
                id="menu-button"
                type="button"
                aria-label="Open navigation menu"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-800 bg-slate-900/80 text-slate-300 transition hover:bg-slate-800 hover:text-white md:hidden"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden border-t border-slate-800/80 py-4 md:hidden">
            <div class="flex flex-col gap-1">
                <a href="#home" class="nav-link-mobile rounded-lg px-4 py-3 text-sm font-medium text-slate-400 transition hover:bg-slate-900/50 hover:text-blue-400">
                    Home
                </a>
                <a href="#about" class="nav-link-mobile rounded-lg px-4 py-3 text-sm font-medium text-slate-400 transition hover:bg-slate-900/50 hover:text-blue-400">
                    About
                </a>
                <a href="#skills" class="nav-link-mobile rounded-lg px-4 py-3 text-sm font-medium text-slate-400 transition hover:bg-slate-900/50 hover:text-blue-400">
                    Skills
                </a>
                <a href="#projects" class="nav-link-mobile rounded-lg px-4 py-3 text-sm font-medium text-slate-400 transition hover:bg-slate-900/50 hover:text-blue-400">
                    Projects
                </a>
                <a href="#contact" class="mt-2 rounded-lg bg-blue-600 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-blue-500">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>