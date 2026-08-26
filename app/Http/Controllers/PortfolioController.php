<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = [
            [
                'name' => 'Golang',
                'category' => 'Backend Development',
                'icon' => 'devicon-go-original-wordmark colored',
            ],
            [
                'name' => 'Python',
                'category' => 'Data & Machine Learning',
                'icon' => 'devicon-python-plain colored',
            ],
            [
                'name' => 'React.js',
                'category' => 'Frontend Development',
                'icon' => 'devicon-react-original colored',
            ],
            [
                'name' => 'Flutter',
                'category' => 'Mobile Development',
                'icon' => 'devicon-flutter-plain colored',
            ],
            [
                'name' => 'JavaScript',
                'category' => 'Frontend Development',
                'icon' => 'devicon-javascript-plain colored',
            ],
            [
                'name' => 'HTML',
                'category' => 'Frontend Development',
                'icon' => 'devicon-html5-plain colored',
            ],
            [
                'name' => 'Laravel',
                'category' => 'Web Application Development',
                'icon' => 'devicon-laravel-original colored',
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'UI Development',
                'icon' => 'devicon-tailwindcss-original colored',
            ],
            [
                'name' => 'MySQL',
                'category' => 'Database',
                'icon' => 'devicon-mysql-original colored',
            ],
        ];

        $projects = [
            [
                'id' => 'project-1',
                'title' => 'E-Lapor DIY',
                'short_description' => 'Aplikasi pelaporan pengaduan masyarakat berbasis web interaktif.',
                'full_description' => 'E-Lapor DIY adalah platform layanan pengaduan masyarakat berbasis web yang dikembangkan menggunakan Golang di sisi backend dan React.js di frontend. Aplikasi ini dirancang untuk mempermudah masyarakat dalam menyampaikan aspirasi dan laporan secara cepat, terstruktur, dan terintegrasi dengan database MySQL.',
                'thumbnail' => 'project-1.jpeg',
                'images' => ['project-1.jpeg', 'project-1-2.jpg', 'project-1-3.jpg'], // Carousel images
                'technologies' => ['Golang', 'React.js', 'MySQL', 'Tailwind CSS'],
                'github' => 'https://github.com/Riyadi07/App-Pengaduan-masyarakat-',
                'demo' => null,
            ],
            [
                'id' => 'project-4',
                'title' => 'Mobile Presensi',
                'short_description' => 'Aplikasi Presensi Mobile.',
                'full_description' => 'Penelitian analisis sentimen untuk menentukan tren topik menggunakan metode Support Vector Machine (SVM) dan Latent Dirichlet Allocation (LDA). Proyek ini melakukan scraping data ulasan pengguna di Play Store, melakukan pra-pemrosesan teks (NLP), ekstrak fitur dengan TF-IDF, serta memodelkan topik sentimen secara akurat.',
                'thumbnail' => 'project-4.png',
                'images' => ['project-4.png', 'project-2-2.jpg'],
                'technologies' => ['Python', 'SVM', 'TF-IDF', 'Machine Learning', 'NLP'],
                'github' => 'https://github.com/Riyadi07/APP_Presensi-Flutter',
                'demo' => null,
            ],
            [
                'id' => 'project-3',
                'title' => 'Web aplikasi rekomendasi objek wisata DIY',
                'short_description' => 'Sistem aplikasi rekomendasi objek wisata.',
                'full_description' => 'Proyek aplikasi web yang dikembangkan sebagai bagian dari tugas akhir pengembangan perangkat lunak akademik. Menggunakan arsitektur micro-service ringan dengan React.js untuk UI interaktif dan Flask Python sebagai API backend.',
                'thumbnail' => 'project-3.png',
                'images' => ['project-3.png'],
                'technologies' => ['React.js', 'Flask', 'MySQL'],
                'github' => 'https://github.com/Riyadi07/APP_rekomendasi-wisata',
                'demo' => null,
            ],
        ];

        $technologyFocus = [
            [
                'name' => 'Golang',
                'category' => 'Backend',
            ],
            [
                'name' => 'React.js',
                'category' => 'Frontend',
            ],
            [
                'name' => 'Python',
                'category' => 'Data',
            ],
            [
                'name' => 'Laravel',
                'category' => 'Backend',
            ],
            [
                'name' => 'Machine Learning',
                'category' => 'AI',
            ],
            [
                'name' => 'MySQL',
                'category' => 'Database',
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'UI',
            ],
            [
                'name' => 'Flutter',
                'category' => 'Mobile',
            ],
        ];

        return view('portfolio', [
            'skills' => $skills,
            'projects' => $projects,
            'technologyFocus' => $technologyFocus,
        ]);
    }
}