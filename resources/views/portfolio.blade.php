@extends('layouts.app')
@section('title', 'Slamet Riyadi <-Software Developer->')
@section('content')
<!-- HERO SECTION -->
    <section
        id="home"
        class="relative overflow-hidden pt-28 pb-12 sm:pt-24 sm:pb-14 lg:pt-28 lg:pb-16">
        <div class="absolute -right-40 -top-40 -z-10 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                <div class="order-2 lg:order-1">
                    <p class="text-3xl font-semibold text-blue-400">
                        Hi, I'm
                    </p>
                    <h1 class="mt-3 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Slamet Riyadi
                    </h1>
                    <h2 class="mt-4 text-2xl font-semibold text-slate-300 sm:text-3xl h-10">
                        <span id="typed-text" class="text-blue-400"></span>
                    </h2>
                    <p class="mt-4 max-w-xl text-base leading-7 text-slate-400 sm:text-lg">
                        Lulusan S1 Informatika yang memiliki minat dalam pengembangan web,
                        pengembangan backend, dan machine learning. Saya senang membangun
                        solusi digital yang bermanfaat, andal, dan berorientasi pada pengguna.
                    </p>

                    {{-- Action Bar: 4 Tombol Gabung dalam 1 Baris --}}
                    <div class="mt-6 sm:mt-8 flex flex-nowrap items-center gap-2 sm:gap-3.5 w-full overflow-x-auto">
                        {{-- Primary CTA: View Projects --}}
                        <a
                            href="#projects"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 sm:gap-2 rounded-xl bg-blue-600 px-3 py-2.5 sm:px-5 sm:py-3 text-[11px] sm:text-xs lg:text-sm font-semibold text-white whitespace-nowrap shadow-lg shadow-blue-600/30 transition duration-300 hover:bg-blue-500 hover:shadow-blue-500/50 hover:-translate-y-0.5 active:translate-y-0"
                        >
                            <span>View My Projects</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-3 w-3 sm:h-4 sm:w-4 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                            </svg>
                        </a>

                        {{-- Download CV --}}
                        <a
                            href="{{ asset('cv/CV_Slamet_Riyadi.pdf') }}"
                            download="CV_Slamet_Riyadi.pdf"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 sm:gap-2 rounded-xl border border-blue-500/40 bg-blue-500/10 px-3 py-2.5 sm:px-5 sm:py-3 text-[11px] sm:text-xs lg:text-sm font-semibold text-blue-400 whitespace-nowrap backdrop-blur-md transition duration-300 hover:border-blue-400 hover:bg-blue-500/20 hover:text-white hover:-translate-y-0.5 active:translate-y-0"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-3 w-3 sm:h-4 sm:w-4 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            <span>Download CV</span>
                        </a>

                        {{-- GitHub Button --}}
                        <a
                            href="https://github.com/Riyadi07"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="GitHub Profile"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 sm:gap-2 rounded-xl border border-slate-800 bg-slate-900/80 px-3 py-2.5 sm:px-4 sm:py-3 text-[11px] sm:text-xs lg:text-sm font-semibold text-slate-300 whitespace-nowrap backdrop-blur-md transition duration-300 hover:border-slate-700 hover:bg-slate-800 hover:text-white hover:-translate-y-0.5 active:translate-y-0"
                        >
                            <i class="devicon-github-original text-sm sm:text-lg shrink-0"></i>
                            <span>GitHub</span>
                        </a>
                    </div>
                </div>

                <!-- KOLOM KANAN: FOTO PROFIL (DIBERI MARGIN TOP DI MOBILE) -->
                <div class="order-1 flex justify-center mt-6 sm:mt-0 lg:order-2 lg:justify-end">
                    <div class="relative group">
                        <div class="absolute -inset-4 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 blur-2xl opacity-50 group-hover:opacity-80 transition duration-500"></div>
                        <div class="relative overflow-hidden border-2 border-blue-500/30 p-2 shadow-2xl transition duration-500 hover:scale-105"
                            style="border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;">
                            <img
                                src="{{ asset('images/profile.jpg') }}"
                                alt="Slamet Riyadi"
                                class="h-[300px] w-[240px] object-cover object-top sm:h-[390px] sm:w-[285px] transition duration-500 group-hover:scale-110"
                                style="border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section
        id="about"
        class="relative z-10 border-y border-slate-800/80 bg-slate-900/40 py-12 sm:py-16 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Header Section (Diberi z-30 agar di atas tali) -->
            <div class="relative z-30 text-center max-w-2xl mx-auto mb-6 px-4">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-blue-400">Kenali Saya</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-1">Tentang Saya</h2>
                <p class="text-xs sm:text-sm lg:text-base text-slate-400 mt-2 leading-relaxed">Sedikit cerita tentang latar belakang dan minat saya di dunia teknologi.</p>
            </div>
            <div class="mt-2 grid items-start gap-8 lg:grid-cols-12 lg:gap-12">
                <div id="about-card-container" class="lg:col-span-5 flex justify-center items-start relative min-h-[420px] overflow-visible">    <!-- Canvas Tali Lanyard -->
                    <canvas id="stringCanvas" class="absolute inset-x-0 -top-40 w-full h-[calc(100%+160px)] pointer-events-none z-10 opacity-0 transition-opacity duration-300"></canvas>
                    <div 
                        id="draggable-nametag" 
                        class="relative z-20 w-72 h-[390px] rounded-3xl border-2 border-blue-500/40 bg-slate-950 shadow-[0_10px_35px_rgba(59,130,246,0.25)] p-3.5 overflow-hidden cursor-grab active:cursor-grabbing select-none group opacity-0 transition-opacity duration-300 transform-gpu shrink-0"
                        style="will-change: transform;"
                    >
                        <!-- Holder Clip Metalik Glow -->
                        <div class="absolute top-2 left-1/2 -translate-x-1/2 z-40 h-3.5 w-11 rounded-full bg-slate-800 border border-slate-600 flex justify-center items-center shadow-md">
                            <div class="h-1.5 w-6 rounded-full bg-blue-400"></div>
                        </div>

                        <!-- Frame Foto Jelas & Cerah -->
                        <div class="relative w-full h-[300px] mt-2 overflow-hidden rounded-2xl border border-slate-800 shadow-md">
                            <img 
                                src="{{ asset('images/profile2.jpg') }}" 
                                class="w-full h-full object-cover object-top pointer-events-none transition-transform duration-500 group-hover:scale-105"
                            >
                            <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        </div>

                        <!-- Informasi Identitas Nama -->
                        <div class="flex flex-col items-center text-center mt-2">
                            <h3 class="text-base font-bold text-white tracking-wide">Slamet Riyadi</h3>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: DESKRIPSI -->
                <div class="lg:col-span-7 space-y-5">
                    <div class="rounded-2xl border border-slate-800/80 bg-slate-950/50 p-6 sm:p-7 backdrop-blur-sm">
                        <p class="mt-1 max-w-xl text-base leading-7 text-slate-400 sm:text-lg">
                            Saya adalah lulusan S1 Informatika dari Universitas Jenderal Achmad Yani Yogyakarta dengan minat yang kuat pada pengembangan perangkat lunak, 
                            teknologi web modern, dan machine learning. Pengalaman saya mencakup pembuatan aplikasi web, apalikasi mobile, perancangan arsitektur backend,
                            serta natural Language Processing (NLP).
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="rounded-xl border border-slate-800 bg-slate-950/40 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wider text-blue-400">Pendidikan</p>
                            <p class="mt-1 text-base font-bold text-white">S1 Informatika</p>
                            <p class="text-xs text-slate-400 mt-0.5 mb-5">Universitas Jenderal Achmad Yani Yogyakarta</p>
                            <p class="mt-1 text-base font-bold text-white">SMA Negeri 1 Semaka</p>
                            <p class="text-xs text-slate-400 mt-0.5">MIPA (Matematika dan Ilmu Pengetahuan Alam)</p>
                        </div>
                        <div class="rounded-xl border border-slate-800 bg-slate-950/40 p-5">
                            <p class="text-xs font-semibold uppercase tracking-wider text-blue-400 mb-3">Minat & Keahlian</p>
                            <div class="space-y-3 text-sm font-medium">
                                <div class="flex items-center gap-3 text-slate-200">
                                    <i class="devicon-go-original-wordmark text-xl text-blue-400"></i>
                                    <span>Backend / Golang & Node.js</span>
                                </div>
                                <div class="flex items-center gap-3 text-slate-200">
                                    <i class="devicon-react-original text-xl text-cyan-400"></i>
                                    <span>Frontend / ReactJS & Laravel</span>
                                </div>
                                <div class="flex items-center gap-3 text-slate-200">
                                    <i class="devicon-python-plain text-xl text-yellow-400"></i>
                                    <span>Machine Learning & NLP (Python)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- SKILLS SECTION -->
    <section
        id="skills"
        class="relative z-10 border-b border-slate-800/80 bg-slate-950/30 py-14 sm:py-18 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-6 px-4">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-blue-400">Skills</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-1">Teknologi Yang Saya Gunakan</h2>
                <p class="text-xs sm:text-sm lg:text-base text-slate-400 mt-2 leading-relaxed">
                    Berbagai teknologi dan perangkat yang saya gunakan dalam pengembangan perangkat lunak, sistem web, dan machine learning.
                </p>
            </div>

            <!-- Container Skills: Mobile 2 Kolom, Desktop Flex-Wrap Centered & Equal Height -->
            <div class="mt-8 flex flex-wrap justify-center items-stretch -mx-2">
                @foreach ($skills as $skill)
                    <div class="w-1/2 lg:w-1/4 p-2 flex flex-col">
                        <x-skill-card
                            :name="$skill['name']"
                            :category="$skill['category']"
                            :icon="$skill['icon']"
                            class="w-full h-full"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section
        id="projects"
        class="relative z-10 border-t border-slate-800/80 bg-slate-900/10 py-12 sm:py-16 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-6 px-4">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-blue-400">Selected works</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-1">Projects</h2>
                <p class="text-xs sm:text-sm lg:text-base text-slate-400 mt-2 leading-relaxed">
                    Beberapa proyek yang telah saya kembangkan, pengembangan perangkat lunak, teknologi web maupun mobile, 
                    dan machine learning.</p>
            </div>
            {{-- Grid Responsif: Mobile 2 Kolom, Desktop 3 Kolom --}}
            <div class="mt-8 grid grid-cols-2 gap-3 sm:gap-6 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <x-project-card
                        :id="$project['id']"
                        :title="$project['title']"
                        :shortDescription="$project['short_description']"
                        :fullDescription="$project['full_description']"
                        :thumbnail="$project['thumbnail']"
                        :images="$project['images']"
                        :technologies="$project['technologies']"
                        :github="$project['github']"
                        :demo="$project['demo']"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section
        id="contact"
        class="relative z-10 border-t border-slate-800/80 bg-slate-900/10 py-14 sm:py-20 overflow-hidden"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
            <!-- Header Section -->
            <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12 px-4">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-blue-400">Contact Me</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-1">Mari Bekerja Sama</h2>
                <p class="text-xs sm:text-sm lg:text-base text-slate-400 mt-2 leading-relaxed">
                    Saya terbuka untuk diskusi peluang kerja, kolaborasi proyek, maupun diskusi seputar teknologi.
                </p>
            </div>

            <div class="grid gap-6 lg:gap-8 lg:grid-cols-12 items-start">    
                <!-- KOLOM KIRI: KARTU INFORMASI KONTAK -->
                <div class="lg:col-span-5 space-y-3 sm:space-y-4">
                    <!-- Email Card -->
                    <a href="mailto:riyadiputrar@gmail.com" class="group flex items-center gap-3.5 sm:gap-4 rounded-2xl border border-slate-800/80 bg-slate-950/40 p-3.5 sm:p-5 backdrop-blur-md transition duration-300 hover:border-blue-500/50 hover:bg-slate-900/60">
                        <div class="flex h-10 w-10 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-xl border border-blue-500/30 bg-blue-600/10 text-blue-400 transition duration-300 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5 sm:h-6 sm:w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-blue-400">Email</p>
                            <p class="text-xs sm:text-base font-bold text-white group-hover:text-blue-300 transition truncate">riyadiputrar@gmail.com</p>
                        </div>
                    </a>

                    <!-- Instagram Card -->
                    <a href="https://instagram.com/riyadii0_" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-3.5 sm:gap-4 rounded-2xl border border-slate-800/80 bg-slate-950/40 p-3.5 sm:p-5 backdrop-blur-md transition duration-300 hover:border-pink-500/50 hover:bg-slate-900/60">
                        <div class="flex h-10 w-10 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-xl border border-pink-500/30 bg-pink-600/10 text-pink-400 transition duration-300 group-hover:scale-110 group-hover:bg-pink-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 sm:h-6 sm:w-6">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-pink-400">Instagram</p>
                            <p class="text-xs sm:text-base font-bold text-white group-hover:text-pink-300 transition truncate">@riyadii0_</p>
                        </div>
                    </a>

                    <!-- Location Card -->
                    <div class="flex items-center gap-3.5 sm:gap-4 rounded-2xl border border-slate-800/80 bg-slate-950/40 p-3.5 sm:p-5 backdrop-blur-md">
                        <div class="flex h-10 w-10 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-xl border border-indigo-500/30 bg-indigo-600/10 text-indigo-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5 sm:h-6 sm:w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-indigo-400">Lokasi</p>
                            <p class="text-xs sm:text-base font-bold text-white truncate">Yogyakarta, Indonesia</p>
                        </div>
                    </div>
                </div>

            <!-- KOLOM KANAN: FORM PESAN DIRECT TO EMAIL -->
                <div class="lg:col-span-7 rounded-2xl sm:rounded-3xl border border-slate-800/80 bg-slate-950/50 p-4 sm:p-8 backdrop-blur-md">
                    <form id="contact-form" action="https://formspree.io/f/myegrjkj" method="POST" autocomplete="off" class="space-y-3 sm:space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                            <!-- Input Nama -->
                            <div>
                                <label for="contact-name" class="block text-[10px] sm:text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1 sm:mb-2">Nama Anda</label>
                                <input 
                                    type="text" 
                                    name="name"
                                    id="contact-name" 
                                    required 
                                    placeholder="Masukkan nama Anda"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-900/90 px-3.5 py-2.5 sm:px-4 sm:py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 transition"
                                >
                            </div>

                            <!-- Input Email -->
                            <div>
                                <label for="contact-email" class="block text-[10px] sm:text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1 sm:mb-2">Email Anda</label>
                                <input 
                                    type="email" 
                                    name="email"
                                    id="contact-email" 
                                    required 
                                    placeholder="nama@email.com"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-900/90 px-3.5 py-2.5 sm:px-4 sm:py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 transition"
                                >
                            </div>
                        </div>

                        <!-- Input Pesan -->
                        <div>
                            <label for="contact-message" class="block text-[10px] sm:text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1 sm:mb-2">Pesan</label>
                            <textarea 
                                name="message"
                                id="contact-message" 
                                rows="3" 
                                required 
                                placeholder="Tuliskan pesan Anda di sini..."
                                class="w-full rounded-xl border border-slate-800 bg-slate-900/90 px-3.5 py-2.5 sm:px-4 sm:py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 transition custom-scrollbar"
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            id="contact-submit-btn"
                            class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-2.5 sm:px-6 sm:py-3.5 text-xs sm:text-sm font-semibold text-white shadow-lg shadow-blue-600/30 transition duration-300 hover:bg-blue-500 hover:shadow-blue-500/50 hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-50"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                            <span id="contact-btn-text">Kirim Pesan</span>
                        </button>
                    </form>
                </div>

                {{-- MODAL POP-UP NOTIFIKASI (SUKSES / GAGAL) --}}
                <div id="contact-modal" class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300 p-4">
                    <div class="relative w-full max-w-xs sm:max-w-sm rounded-2xl sm:rounded-3xl border border-slate-800 bg-slate-950/95 p-5 sm:p-6 text-center shadow-2xl text-white transform transition-all duration-300 scale-95">
                        
                        {{-- Icon Notifikasi --}}
                        <div id="contact-modal-icon" class="mx-auto mb-3 sm:mb-4 flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-2xl">
                            <!-- Icon akan diisi oleh JavaScript -->
                        </div>

                        {{-- Judul & Pesan --}}
                        <h3 id="contact-modal-title" class="text-lg sm:text-xl font-bold text-white"></h3>
                        <p id="contact-modal-message" class="mt-1.5 sm:mt-2 text-xs sm:text-sm text-slate-300 leading-relaxed"></p>

                        {{-- Tombol OK --}}
                        <button 
                            type="button" 
                            onclick="closeContactModal()" 
                            class="mt-5 sm:mt-6 w-full rounded-xl bg-blue-600 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-blue-500 shadow-lg shadow-blue-600/30"
                        >
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- MODAL DETAIL PROJECT (UKURAN MOBILE DIBUAT LEBIH RINGKAS & TIDAK FULL) --}}
<div 
    id="project-modal" 
    class="fixed inset-0 z-[60] flex items-center justify-center bg-slate-950/85 backdrop-blur-xl opacity-0 pointer-events-none transition-all duration-300 p-3 sm:p-6">    
    {{-- Kontainer Utama Modal: h-[70vh] di HP (Compact), sm:h-[80vh] di Web --}}
    <div 
        class="relative flex flex-col w-full max-w-sm sm:max-w-2xl lg:max-w-3xl h-[70vh] sm:h-[80vh] rounded-2xl sm:rounded-3xl border border-blue-500/50 bg-slate-950/95 ring-1 ring-blue-500/40 shadow-[0_0_35px_rgba(59,130,246,0.3)] overflow-hidden text-white my-auto transform scale-95 transition-all duration-300">        
        {{-- Tombol Close --}}
        <button 
            type="button" 
            onclick="closeProjectModal()" 
            class="absolute top-2.5 right-2.5 z-40 flex h-7 w-7 sm:h-9 sm:w-9 items-center justify-center rounded-full bg-slate-950/80 text-slate-300 hover:bg-rose-500/20 hover:text-rose-400 hover:border-rose-500/50 border border-slate-700/80 backdrop-blur-md transition shadow-lg text-xs sm:text-sm"
            aria-label="Tutup Modal"
        >
            ✕
        </button>

        {{-- AREA 1: CAROUSEL GAMBAR (50% DI MOBILE, 60% DI DESKTOP) --}}
        <div class="relative w-full h-[50%] sm:h-[60%] bg-slate-900 border-b border-blue-500/40 shrink-0 group overflow-hidden">
            <img id="modal-carousel-img" src="" alt="Project Image" class="w-full h-full object-cover object-top transition-all duration-500">
            
            {{-- Gradient Overlay Bawah Gambar --}}
            <div class="absolute inset-x-0 bottom-0 h-8 bg-gradient-to-t from-slate-950 to-transparent pointer-events-none"></div>

            {{-- Tombol Next/Prev --}}
            <button 
                id="modal-prev-btn" 
                onclick="prevCarouselImage()" 
                class="absolute left-2.5 top-1/2 -translate-y-1/2 flex h-8 w-8 sm:h-9 sm:w-9 items-center justify-center rounded-full bg-slate-950/80 text-white border border-slate-700/80 backdrop-blur-md opacity-100 sm:opacity-0 sm:group-hover:opacity-100 hover:bg-blue-600 hover:border-blue-500 transition-all duration-300 z-30 text-xs sm:text-sm shadow-md"
            >
                ❮
            </button>
            <button 
                id="modal-next-btn" 
                onclick="nextCarouselImage()" 
                class="absolute right-2.5 top-1/2 -translate-y-1/2 flex h-8 w-8 sm:h-9 sm:w-9 items-center justify-center rounded-full bg-slate-950/80 text-white border border-slate-700/80 backdrop-blur-md opacity-100 sm:opacity-0 sm:group-hover:opacity-100 hover:bg-blue-600 hover:border-blue-500 transition-all duration-300 z-30 text-xs sm:text-sm shadow-md"
            >
                ❯
            </button>

            {{-- Indicator Dots --}}
            <div id="modal-carousel-dots" class="absolute bottom-2.5 inset-x-0 flex justify-center gap-1.5 z-30"></div>
        </div>

        {{-- AREA 2: CONTENT DESKRIPSI (SISA 50% DI MOBILE, 40% DI DESKTOP) --}}
        <div class="flex-1 flex flex-col min-h-0 bg-slate-950 relative">
            
            {{-- Area Teks & Badges (Scrollable) --}}
            <div class="flex-1 overflow-y-auto p-3.5 sm:p-5 space-y-3 custom-scrollbar">
                <div>
                    <h3 id="modal-title" class="text-sm sm:text-xl font-bold text-white pr-6 leading-snug"></h3>
                    <p id="modal-description" class="mt-1.5 text-xs sm:text-sm leading-relaxed text-slate-300 whitespace-pre-line"></p>
                </div>

                {{-- Bahasa & Teknologi Badge --}}
                <div>
                    <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-widest text-blue-400 mb-1.5">Bahasa & Teknologi:</p>
                    <div id="modal-technologies" class="flex flex-wrap gap-1 sm:gap-1.5"></div>
                </div>
            </div>

            {{-- Footer Tombol Action (Hanya GitHub) --}}
            <div class="p-2.5 sm:p-3.5 border-t border-slate-800/90 bg-slate-950 shrink-0 flex items-center justify-end">
                <a 
                    id="modal-github" 
                    href="#" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="hidden inline-flex items-center gap-1.5 rounded-xl border border-slate-800 bg-slate-900/90 px-3.5 py-1.5 sm:px-4 sm:py-2 text-[11px] sm:text-xs font-semibold text-slate-300 hover:border-slate-700 hover:bg-slate-800 hover:text-white transition shadow-sm"
                >
                    <i class="devicon-github-original text-xs sm:text-sm"></i> 
                    <span>GitHub</span>
                </a>
            </div>
        </div>
    </div>
</div>