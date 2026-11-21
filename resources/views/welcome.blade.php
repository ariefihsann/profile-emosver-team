<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="EMOSVER PENS - Tim Robotika Bawah Air (AUV) dari Politeknik Elektronika Negeri Surabaya. Inovasi maritim masa depan Indonesia.">
    <meta name="keywords" content="EMOSVER, PENS, KRBAI, Robot Bawah Air, AUV Indonesia, Surabaya Robotics">
    <meta name="author" content="EMOSVER Team">

    <meta property="og:title" content="EMOSVER - PENS Underwater Robotics">
    <meta property="og:description" content="Eksplorasi teknologi maritim bersama tim AUV terbaik dari PENS.">
    <meta property="og:image" content="{{ asset('img/logo.jpg') }}">
    <meta property="og:url" content="https://krbai.pens.ac.id">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <title>EMOSVER - PENS Underwater Robotics</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        /* CORE STYLES */
        body { margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; background-color: #000; overflow: hidden; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .blink-cursor { animation: blink 1s step-end infinite; }
        @keyframes blink { 50% { opacity: 0; } }

        /* MARQUEE ANIMATION - Dioptimasi dengan 3D transform */
        @keyframes scroll {
            0% { transform: translate3d(0, 0, 0); }
            100% { transform: translate3d(-50%, 0, 0); } 
        }
        .animate-scroll {
            display: flex;
            width: max-content; 
            animation: scroll 25s linear infinite; 
            will-change: transform;
        }
        .animate-scroll:hover { animation-play-state: paused; }

        /* GLASS CARD EFFECT */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
            will-change: transform, box-shadow;
        }
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(34, 211, 238, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 10px 40px -10px rgba(34,211,238,0.15);
        }
        
        .text-gradient {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-wrapper {
            width: 50px;
            height: 50px;    
            border-radius: 50%; 
            overflow: hidden; 
            border: 0px solid #ccc;
        }

        .logo-zoom {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            transform: scale(2); 
        }
    </style>
</head>

<body class="h-screen w-full">
    <div class="relative w-full h-full bg-black flex flex-col">
        
        @include('components.navbar')

        <div class="flex-1 overflow-y-auto no-scrollbar scroll-smooth">
            
            <div class="relative w-full h-screen flex flex-col justify-center items-center text-center md:text-left md:items-start md:pl-24">
                
                <!-- Background Image di-setting efficient -->
                <div class="absolute inset-0 bg-cover bg-center z-0" 
                     style="background-image: url('{{ asset('img/news2.webp') }}'); will-change: opacity;">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/80 z-10"></div>
                </div>

                <div class="relative z-20 max-w-4xl px-6 mt-20 md:mt-0">
                    <div class="inline-flex items-center gap-2 border border-cyan-500/30 bg-cyan-900/20 px-4 py-1.5 rounded-full mb-8 backdrop-blur-sm animate-fade-in-down transform-gpu">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                        <span class="text-cyan-400 font-bold tracking-widest text-[10px] uppercase font-tech">PENS AUV Team</span>
                    </div>

                    <h1 class="text-5xl md:text-8xl font-bold text-white leading-tight font-tech uppercase drop-shadow-2xl mb-6">
                        We Are <br>
                        The Ocean <br>
                        <span class="text-gradient">Explorers</span><span class="text-cyan-400 blink-cursor">_</span>
                    </h1>
                    
                    <p class="text-gray-300 text-sm md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                        Menggabungkan ketangguhan mekanik dan kecerdasan buatan untuk menaklukkan tantangan bawah air. Kami adalah <strong>EMOSVER</strong>.
                    </p>
                    
                    <div class="flex flex-col md:flex-row items-center gap-6 justify-center md:justify-start">
                        <a href="{{ route('about') }}" class="group relative px-8 py-4 bg-white text-black font-bold rounded-full overflow-hidden transition-all transform-gpu hover:scale-105 shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                            <span class="relative z-10 flex items-center gap-3">
                                MEET THE TEAM <i class="fa-solid fa-arrow-right transform-gpu group-hover:translate-x-1 transition"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 animate-bounce opacity-50 transform-gpu">
                    <span class="text-[10px] text-white uppercase tracking-widest">Scroll Down</span>
                    <i class="fa-solid fa-chevron-down text-white"></i>
                </div>
            </div>

            <div class="relative z-20 bg-[#050505] py-24 px-6 md:px-24 border-t border-white/5">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-white/10 pb-8">
                    <div>
                        <h4 class="text-cyan-400 font-bold tracking-[0.3em] text-xs uppercase mb-2">Hall of Fame</h4>
                        <h2 class="text-4xl text-white font-tech uppercase">Achievements</h2>
                    </div>
                    <div class="text-right hidden md:block">
                        <span class="text-gray-500 text-sm font-light">Consistent Performance<br>in National Level</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="glass-card p-8 rounded-2xl group relative overflow-hidden transform-gpu">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-trophy text-6xl text-white"></i>
                        </div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-4xl font-tech font-bold text-cyan-400">2024</span>
                            <span class="bg-cyan-900/40 text-cyan-300 text-[10px] px-2 py-1 rounded border border-cyan-500/30">NATIONAL</span>
                        </div>
                        <h3 class="text-white font-bold text-2xl mb-1">3rd Place</h3>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4">KRBAI Nasional</p>
                        <div class="h-1 w-12 bg-cyan-500 rounded-full"></div>
                    </div>

                    <div class="glass-card p-8 rounded-2xl group relative overflow-hidden transform-gpu">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-medal text-6xl text-white"></i>
                        </div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-4xl font-tech font-bold text-white">2024</span>
                            <span class="bg-gray-800 text-gray-300 text-[10px] px-2 py-1 rounded border border-gray-600">REGIONAL</span>
                        </div>
                        <h3 class="text-white font-bold text-2xl mb-1">3rd Place</h3>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4">KRBAI Wilayah II</p>
                        <div class="h-1 w-12 bg-gray-500 rounded-full"></div>
                    </div>

                    <div class="glass-card p-8 rounded-2xl group relative overflow-hidden transform-gpu">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-trophy text-6xl text-white"></i>
                        </div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-4xl font-tech font-bold text-cyan-400">2023</span>
                            <span class="bg-cyan-900/40 text-cyan-300 text-[10px] px-2 py-1 rounded border border-cyan-500/30">NATIONAL</span>
                        </div>
                        <h3 class="text-white font-bold text-2xl mb-1">3rd Place</h3>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4">KRBAI Nasional</p>
                        <div class="h-1 w-12 bg-cyan-500 rounded-full"></div>
                    </div>

                    <div class="glass-card p-8 rounded-2xl group relative overflow-hidden transform-gpu">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-medal text-6xl text-white"></i>
                        </div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-4xl font-tech font-bold text-white">2023</span>
                            <span class="bg-gray-800 text-gray-300 text-[10px] px-2 py-1 rounded border border-gray-600">REGIONAL</span>
                        </div>
                        <h3 class="text-white font-bold text-2xl mb-1">2nd Place</h3>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4">KRBAI Wilayah II</p>
                        <div class="h-1 w-12 bg-gray-500 rounded-full"></div>
                    </div>

                </div>
            </div>

            <div class="relative z-20 bg-black py-24 px-6 md:px-24">
                <h4 class="text-cyan-400 font-bold tracking-[0.3em] text-xs uppercase mb-2">Featured</h4>
                <h2 class="text-3xl text-white font-tech uppercase mb-12">In The News</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="group cursor-pointer">
                        <div class="overflow-hidden rounded-xl mb-4 relative border border-white/10 transform-gpu">
                            <!-- Ditambahkan loading="lazy" dan decoding="async" -->
                            <img src="{{ asset('img/news.webp') }}" alt="Berita prestasi tim robot PENS" width="900" height="562" loading="lazy" decoding="async" class="w-full h-56 object-cover transform-gpu group-hover:scale-110 transition duration-700 grayscale group-hover:grayscale-0">
                            <div class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold px-3 py-1 rounded-full">PENS.AC.ID</div>
                        </div>
                        <div class="pl-2">
                            <span class="text-gray-500 text-[10px] uppercase tracking-widest mb-2 block">Juli 2024</span>
                            <h3 class="text-white font-bold text-lg leading-snug group-hover:text-cyan-400 transition mb-2">
                                "Buktikan Diri sebagai Kampus Tradisi Juara, Tim Robot PENS Sukses Bawa Pulang Sembilan Capaian Kejuaraan"
                            </h3>
                            <a href="https://www.pens.ac.id/tag/krinasional2024/" class="text-gray-400 text-xs hover:text-white flex items-center gap-1">Read Article <i class="fa-solid fa-arrow-right text-[10px] transform-gpu group-hover:translate-x-1 transition"></i></a>
                        </div>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="overflow-hidden rounded-xl mb-4 relative border border-white/10 transform-gpu">
                            <img src="{{ asset('img/news1.webp') }}" alt="Berita EMOSVER pada kompetisi robotika" width="900" height="600" loading="lazy" decoding="async" class="w-full h-56 object-cover transform-gpu group-hover:scale-110 transition duration-700 grayscale group-hover:grayscale-0">
                            <div class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full">ANTARA JATENG</div>
                        </div>
                        <div class="pl-2">
                            <span class="text-gray-500 text-[10px] uppercase tracking-widest mb-2 block">Juni 2023</span>
                            <h3 class="text-white font-bold text-lg leading-snug group-hover:text-cyan-400 transition mb-2">
                                "PENS juara umum KRI 2023 di USM, inilah daftar pemenangnya"
                            </h3>
                            <a href="https://www.pens.ac.id/2023/06/15/pens-juara-umum-kri-2023-di-usm-inilah-daftar-pemenangnya/" class="text-gray-400 text-xs hover:text-white flex items-center gap-1">Read Article <i class="fa-solid fa-arrow-right text-[10px] transform-gpu group-hover:translate-x-1 transition"></i></a>
                        </div>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="overflow-hidden rounded-xl mb-4 relative border border-white/10 transform-gpu">
                            <img src="{{ asset('img/news2.webp') }}" alt="Running test robot PENS" width="1080" height="675" loading="lazy" decoding="async" class="w-full h-56 object-cover transform-gpu group-hover:scale-110 transition duration-700 grayscale group-hover:grayscale-0">
                            <div class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold px-3 py-1 rounded-full">PENS NEWS</div>
                        </div>
                        <div class="pl-2">
                            <span class="text-gray-500 text-[10px] uppercase tracking-widest mb-2 block">Mei 2024</span>
                            <h3 class="text-white font-bold text-lg leading-snug group-hover:text-cyan-400 transition mb-2">
                                "Running Test Usai Diselenggarakan, Tim Robot PENS Optimis Taklukkan KRI Nasional 2024"
                            </h3>
                            <a href="https://www.pens.ac.id/2024/05/28/running-test-usai-diselenggarakan-tim-robot-pens-optimis-taklukkan-kri-nasional-2024/" class="text-gray-400 text-xs hover:text-white flex items-center gap-1">Read Article <i class="fa-solid fa-arrow-right text-[10px] transform-gpu group-hover:translate-x-1 transition"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="relative z-20 bg-[#0a0a0a] border-y border-white/10 py-20 overflow-hidden">
                <div class="text-center mb-10 px-6">
                    <h4 class="text-gray-500 font-bold tracking-[0.3em] text-xs uppercase mb-2">Support Us</h4>
                    <h2 class="text-2xl text-white font-tech uppercase">Open Partnership</h2>
                </div>

                <div class="relative w-full overflow-hidden transform-gpu">
                    <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-[#0a0a0a] to-transparent z-10"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-[#0a0a0a] to-transparent z-10"></div>
                    
                    <div class="animate-scroll">
                        <!-- Baris Pertama -->
                        <div class="flex gap-16 px-10 items-center">
                            
                            <!-- LOGO PERUSAHAAN ASLI -->
                            <div class="group flex flex-col items-center justify-center opacity-70 hover:opacity-100 transition duration-300 cursor-pointer">
                                <div class="w-64 h-32 rounded-xl flex items-center justify-center transition p-2">
                                    <img src="{{ asset('img/fugro.webp') }}" width="600" height="336" loading="lazy" decoding="async" alt="Fugro, official partner EMOSVER" class="w-full h-full object-contain scale-150 transform-gpu grayscale group-hover:grayscale-0 transition duration-300">
                                </div>
                                <span class="text-[10px] text-cyan-400 mt-3 uppercase tracking-wider font-bold">Official Partner</span>
                            </div>
                        </div>

                        <!-- Baris Kedua (Duplikat) -->
                        <div class="flex gap-16 px-10 items-center">
                            
                            <!-- LOGO PERUSAHAAN ASLI (Duplikat) -->
                            <div class="group flex flex-col items-center justify-center opacity-70 hover:opacity-100 transition duration-300 cursor-pointer">
                                <div class="w-64 h-32 rounded-xl flex items-center justify-center transition p-2">
                                    <img src="{{ asset('img/fugro.webp') }}" width="600" height="336" loading="lazy" decoding="async" alt="Fugro, official partner EMOSVER" class="w-full h-full object-contain scale-150 transform-gpu grayscale group-hover:grayscale-0 transition duration-300">
                                </div>
                                <span class="text-[10px] text-cyan-400 mt-3 uppercase tracking-wider font-bold">Official Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="https://linktr.ee/emosver.pens" target="_blank" class="inline-block border border-white/20 text-white px-8 py-3 rounded-full text-xs font-bold uppercase hover:bg-white hover:text-black transition tracking-widest transform-gpu hover:-translate-y-1">
                        Become a Sponsor
                    </a>
                </div>
            </div>

            <div class="relative z-20 bg-black pt-20 pb-10 px-6 md:px-24">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 border-b border-white/10 pb-12">
                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="https://upload.wikimedia.org/wikipedia/id/4/44/Logo_PENS.png" loading="lazy" decoding="async" alt="Logo" class="h-10 w-auto bg-white rounded-full p-1">
                            <span class="text-2xl font-bold font-tech text-white">EMOSVER</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed max-w-md font-light">
                            Divisi Robot Bawah Air (AUV) - Politeknik Elektronika Negeri Surabaya.<br>
                            Berinovasi untuk masa depan maritim Indonesia.
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Contact</h4>
                        <ul class="space-y-4 text-sm text-gray-400 font-light">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-location-dot text-cyan-500 mt-1"></i>
                                <span>Gedung Robotika PENS Lt. 2,<br>Surabaya, Indonesia</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-envelope text-cyan-500"></i>
                                <span>krbai@event.pens.ac.id</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Follow Us</h4>
                        <div class="flex gap-4">
                            <a href="https://instagram.com/emosver.team" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-cyan-500 hover:text-black transform-gpu hover:scale-110 transition">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@emosver" target="_blank" rel="noopener noreferrer" aria-label="YouTube EMOSVER" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-cyan-500 hover:text-black transform-gpu hover:scale-110 transition">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://linkedin.com/company/emosver" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn EMOSVER" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-cyan-500 hover:text-black transform-gpu hover:scale-110 transition">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-gray-600 uppercase tracking-wider">
                    <span>&copy; 2026 EMOSVER Team PENS. All Rights Reserved.</span>
                    <span>Surabaya, Indonesia</span>
                </div>
            </div>

        </div> 
    </div>
</body>
</html>