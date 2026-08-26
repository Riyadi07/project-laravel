<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Slamet Riyadi <-Software Developer->')</title>

    {{-- Devicon CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230f172a'/><text x='50%' y='65%' font-size='50' font-weight='bold' font-family='sans-serif' fill='%233b82f6' text-anchor='middle'>SR</text></svg>">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 antialiased relative selection:bg-blue-500 selection:text-white min-h-screen overflow-x-hidden">
    <canvas id="meteorCanvas" class="fixed inset-0 pointer-events-none z-0 opacity-70"></canvas>
    <div id="cursor-glow" class="fixed pointer-events-none z-0 w-[500px] h-[500px] rounded-full bg-blue-600/10 blur-[120px] -translate-x-1/2 -translate-y-1/2 transition-opacity duration-300"></div>
    <!-- PRELOADER SR ANIMATED -->
    <div id="preloader" class="fixed inset-0 z-[100] flex flex-col items-center justify-center bg-slate-950 transition-opacity duration-700">
        <div class="relative flex items-center justify-center">
            {{-- Pendaran Ring Glowing di Luar --}}
            <div class="absolute h-24 w-24 rounded-2xl bg-blue-600/30 blur-xl animate-pulse"></div>
            
            {{-- Box Logo SR dengan Animasi Kedip (Pulse) --}}
            <div class="relative flex h-20 w-20 items-center justify-center rounded-2xl border border-blue-500/40 bg-slate-900/90 shadow-2xl shadow-blue-500/20 animate-pulse">
                <span class="text-3xl font-extrabold tracking-wider text-blue-400">SR</span>
            </div>
        </div>
        
        {{-- Teks Indikator Loading --}}
        <p class="mt-4 text-xs font-semibold tracking-widest text-slate-400 uppercase animate-pulse">
            Loading...
        </p>
    </div>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- PAGE CONTENT --}}
    <main class="relative z-10">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="relative mt-20 bg-slate-950/90 backdrop-blur-md text-white z-10">
        {{-- S-SHAPED TOP WAVE WITH SOFT GLOW ONLY (NO SOLID LINE) --}}
        <div class="absolute -top-20 left-0 w-full overflow-hidden leading-none sm:-top-24 pointer-events-none z-20">
            <svg class="relative block h-24 w-full sm:h-28" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                
                {{-- Layer Pendaran Cahaya Murni (Tanpa Garis Padat) --}}
                <path 
                    d="M0 80 C180 80 250 15 460 15 C650 15 690 100 850 100 C1040 100 1110 25 1260 25 C1340 25 1390 45 1440 65" 
                    fill="none" 
                    stroke="rgba(255, 255, 255, 0.4)" 
                    stroke-width="8"
                    class="[filter:blur(9px)]"
                />

                {{-- Layer Pendaran Inti yang Lebih Halus --}}
                <path 
                    d="M0 80 C180 80 250 15 460 15 C650 15 690 100 850 100 C1040 100 1110 25 1260 25 C1340 25 1390 45 1440 65" 
                    fill="none" 
                    stroke="rgba(255, 255, 255, 0.6)" 
                    stroke-width="3"
                    class="[filter:blur(8px)]"
                />

                {{-- Isi Body Footer Gelombang (Warna Gelap Utama) --}}
                <path 
                    d="M0 80 C180 80 250 15 460 15 C650 15 690 100 850 100 C1040 100 1110 25 1260 25 C1340 25 1390 45 1440 65 L1440 120 L0 120 Z" 
                    class="fill-slate-950"
                />
            </svg>
        </div>

        <div class="mx-auto max-w-7xl px-6 pt-14 lg:px-8 lg:pt-16">
            <div class="grid gap-12 md:grid-cols-3">
                
                {{-- PROFILE --}}
                <div>
                    <h2 class="text-2xl font-bold tracking-tight">Slamet Riyadi</h2>
                    <p class="mt-2 text-sm font-medium text-blue-400">Software Developer</p>
                    <p class="mt-4 max-w-sm text-sm leading-7 text-slate-400">
                        Lulusan S1 Informatika yang memiliki minat pada pengembangan web, backend development, dan machine learning.
                    </p>
                    <a href="mailto:riyadiputrar@gmail.com" class="mt-5 inline-flex items-center gap-2 text-sm text-slate-300 transition hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-8.69 5.793a2.25 2.25 0 0 1-2.12 0L2.25 6.75"/>
                        </svg>
                        riyadiputrar@gmail.com
                    </a>
                </div>

                {{-- NAVIGATION --}}
                <div>
                    <h3 class="text-sm font-semibold tracking-widest text-white">NAVIGATION</h3>
                    <nav class="mt-5 flex flex-col gap-3 text-sm">
                        <a href="#home" class="text-slate-400 transition duration-300 hover:translate-x-1 hover:text-blue-400">Home</a>
                        <a href="#about" class="text-slate-400 transition duration-300 hover:translate-x-1 hover:text-blue-400">About</a>
                        <a href="#skills" class="text-slate-400 transition duration-300 hover:translate-x-1 hover:text-blue-400">Skills</a>
                        <a href="#projects" class="text-slate-400 transition duration-300 hover:translate-x-1 hover:text-blue-400">Projects</a>
                        <a href="#contact" class="text-slate-400 transition duration-300 hover:translate-x-1 hover:text-blue-400">Contact</a>
                    </nav>
                </div>

                {{-- CONNECT --}}
                <div>
                    <h3 class="text-sm font-semibold tracking-widest text-white">CONNECT</h3>
                    <p class="mt-5 max-w-sm text-sm leading-7 text-slate-400">
                        Temukan saya melalui beberapa platform berikut untuk melihat aktivitas dan proyek yang saya kerjakan.
                    </p>
                    <div class="mt-5 flex items-center gap-3">
                        {{-- GitHub --}}
                        <a href="https://github.com/Riyadi07" target="_blank" rel="noreferrer" aria-label="GitHub" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition duration-300 hover:-translate-y-1 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                            <i class="devicon-github-original text-lg"></i>
                        </a>
                        
                        {{-- Instagram --}}
                        <a href="https://instagram.com/riyadii0_" target="_blank" rel="noreferrer" aria-label="Instagram" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition duration-300 hover:-translate-y-1 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- COPYRIGHT --}}
            <div class="mt-12 border-t border-slate-800/80 py-6">
                <div class="flex flex-col gap-2 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">
                    <p>© {{ date('Y') }} Slamet Riyadi.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Typed.js Library CDN -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</body>
</html>