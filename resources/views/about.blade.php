<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <title>About Team - EMOSVER PENS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; background-color: #000; overflow-x: hidden; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Efek Kaca Asli - Tanpa will-change yang bikin berat */
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
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
<body class="h-screen w-full text-white">

    <div class="relative w-full h-full bg-black flex flex-col">
        
        @include('components.navbar')
        
        <!-- Background Bersih Tanpa Class GPU -->
        <div class="absolute inset-0 bg-cover bg-center pointer-events-none" 
             style="background-image: url('{{ asset('img/teamm.webp') }}');">
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm"></div> 
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-32 pb-20 px-6 md:px-24">
            
            <div class="max-w-4xl mx-auto text-center mb-20 mt-10">
                <span class="text-cyan-400 font-bold tracking-[0.5em] text-xs uppercase mb-4 block animate-pulse">Who We Are</span>
                <h1 class="text-4xl md:text-6xl font-bold font-tech uppercase mb-6 leading-tight drop-shadow-lg">
                    We Are <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">EMOSVER</span>
                </h1>
                <p class="text-gray-300 text-sm md:text-lg leading-relaxed max-w-3xl mx-auto font-light">
                  Kami adalah tim riset dari PENS yang mengembangkan kendaraan bawah air, baik yang bergerak otomatis (AUV) maupun kendali jarak jauh (ROV). Melalui penggabungan rekayasa presisi dan sistem kontrol cerdas, kami menghadirkan solusi teknologi untuk eksplorasi maritim.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-7xl mx-auto mb-32 items-center">
                
                <div class="relative h-[400px] rounded-2xl overflow-hidden border border-white/20 group shadow-2xl">
                    <img src="{{ asset('img/team.webp') }}" alt="Foto tim EMOSVER PENS" width="900" height="1200" loading="lazy" decoding="async" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 transform group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent pointer-events-none"></div>
                    <div class="absolute bottom-8 left-8">
                        <h3 class="font-tech text-2xl mb-1">The Deep Vision</h3>
                        <p class="text-cyan-400 text-xs tracking-widest uppercase font-bold">Since 2023</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <h2 class="text-3xl font-tech uppercase border-l-4 border-cyan-400 pl-6 mb-8">Our Philosophy</h2>
                    
                    <div class="glass-panel p-6 rounded-xl hover:bg-white/10">
                        <h4 class="font-bold text-lg mb-2 flex items-center gap-3">
                            <x-icon name="anchor" class="text-cyan-400 text-xl" /> Resilience
                        </h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Desain kami berfokus pada durabilitas. Setiap unit dibangun dengan standar tinggi untuk memastikan stabilitas dan performa di kedalaman ekstrem.</p>
                    </div>
                    
                    <div class="glass-panel p-6 rounded-xl hover:bg-white/10">
                        <h4 class="font-bold text-lg mb-2 flex items-center gap-3">
                            <x-icon name="lightbulb" class="text-yellow-400 text-xl" /> Innovation
                        </h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Kami mengimplementasikan Computer Vision dan kecerdasan buatan untuk kemampuan navigasi serta deteksi objek secara otonom.</p>
                    </div>

                    <div class="glass-panel p-6 rounded-xl hover:bg-white/10">
                        <h4 class="font-bold text-lg mb-2 flex items-center gap-3">
                            <x-icon name="users" class="text-purple-400 text-xl" /> Synergy
                        </h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Enam spesialis, dua pembimbing, satu visi. Sinergi antara divisi mekanik, elektrik, dan software adalah fondasi utama EMOSVER.</p>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto mb-32">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-tech uppercase mb-4">The Squad</h2>
                    <span class="text-cyan-400 text-xs font-bold bg-cyan-900/30 border border-cyan-500/30 px-6 py-2 rounded-full uppercase tracking-wider">6 Core Members</span>
                </div>

                <div class="flex flex-wrap justify-center gap-8">
                    
                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                            <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                    <img src="{{ asset('img/team/ryan.webp') }}" alt="Ryan Putra Nurmawan, ketua tim EMOSVER" width="700" height="525" loading="lazy" decoding="async"
                                        class="w-full h-full object-cover transition duration-500 
                                                scale-150 object-bottom 
                                                grayscale group-hover:grayscale-0 group-hover:scale-175">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">LEADER</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">RYAN PUTRA NURMAWAN</h4>
                        <p class="text-cyan-400 text-xs uppercase tracking-widest font-bold mb-4">Leader</p>
                        <p class="text-gray-500 text-xs italic">"Leadership is action, not position."</p>
                    </div>

                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                            <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                    <img src="{{ asset('img/team/zahra.webp') }}" alt="Azzahra Pramagda R, divisi Software & AI" width="700" height="525" loading="lazy" decoding="async"
                                    class="w-full h-full object-cover transition duration-500 
                                                        scale-[1.8] object-bottom -translate-x-1 -translate-y-5 
                                                        grayscale group-hover:grayscale-0 group-hover:scale-[2.0]">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">Program</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">AZZAHRA PRAMAGDA R</h4>
                        <p class="text-purple-400 text-xs uppercase tracking-widest font-bold mb-4">Software & AI</p>
                        <p class="text-gray-500 text-xs italic">"Code speaks louder than words."</p>
                    </div>

                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                        <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                    <img src="{{ asset('img/team/rifqi.webp') }}" alt="Ahmad Rifki Ferdian, divisi struktur mekanik" width="700" height="525" loading="lazy" decoding="async"
                                    class="w-full h-full object-cover transition duration-500 
                                                        scale-[1.8] object-bottom -translate-x-1 -translate-y-3 
                                                        grayscale group-hover:grayscale-0 group-hover:scale-[2.0]">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">MECH</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">AHMAD RIFKI FERDIAN</h4>
                        <p class="text-orange-400 text-xs uppercase tracking-widest font-bold mb-4">Structure</p>
                        <p class="text-gray-500 text-xs italic">"Build it strong, make it last."</p>
                    </div>

                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                             <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                    <img src="{{ asset('img/team/awang.webp') }}" alt="Gumawang Sasongko, divisi struktur mekanik" width="700" height="525" loading="lazy" decoding="async"
                                    class="w-full h-full object-cover transition duration-500 
                                                        scale-[1.8] object-bottom -translate-x-1 -translate-y-3 
                                                        grayscale group-hover:grayscale-0 group-hover:scale-[2.0]">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">MECH</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">GUMAWANG SASONGKO</h4>
                        <p class="text-orange-400 text-xs uppercase tracking-widest font-bold mb-4">Structure</p>
                        <p class="text-gray-500 text-xs italic">"Build it strong, make it last."</p>
                    </div>

                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                        <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                    <img src="{{ asset('img/team/raka.webp') }}" alt="Rakha Hanif Lutfirrahman, divisi elektronika" width="700" height="525" loading="lazy" decoding="async"
                                    class="w-full h-full object-cover transition duration-500 
                                                        scale-[1.8] object-bottom -translate-x-0 -translate-y-3 
                                                        grayscale group-hover:grayscale-0 group-hover:scale-[2.0]">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">ELECTRIC</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">RAKHA HANIF LUTFIRRAHMAN</h4>
                        <p class="text-yellow-400 text-xs uppercase tracking-widest font-bold mb-4">Electronics</p>
                        <p class="text-gray-500 text-xs italic">"Powering the future."</p>
                    </div>

                    <div class="w-full sm:w-[300px] glass-panel p-8 rounded-3xl text-center hover:-translate-y-3 transition duration-500 group">
                            <div class="w-32 h-32 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-6 relative">
                                <div class="w-full h-full rounded-full overflow-hidden relative">
                                        <img src="{{ asset('img/team/arif.webp') }}" alt="Arif Muhammad Ihsan Marbun, project manager" width="700" height="468" loading="lazy" decoding="async"
                                            class="w-full h-full object-cover transition duration-500 
                                                    scale-125 translate-x-0  object-center 
                                                    grayscale group-hover:grayscale-0 group-hover:scale-150">
                                </div>
                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-cyan-600 text-[10px] font-bold px-3 py-1 rounded-full shadow-lg z-10">PROYEK MANAGER</div>
                            </div>
                        <h4 class="font-bold text-xl mb-1">ARIF MUHAMMAD IHSAN MARBUN</h4>
                        <p class="text-blue-400 text-xs uppercase tracking-widest font-bold mb-4">Official & Ops</p>
                        <p class="text-gray-500 text-xs italic">"Efficiency is key."</p>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 max-w-7xl mx-auto mb-24">
                
                <div>
                    <h3 class="font-bold uppercase tracking-widest mb-8 border-l-4 border-cyan-400 pl-6 text-xl">Advisor & Mentors</h3>
                    
                        <div class="glass-panel p-6 rounded-2xl flex items-center gap-6 mb-6 hover:bg-white/5 transition duration-300">
                            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-cyan-500/30 shrink-0">
                                <img src="{{ asset('img/team/pakadit.webp') }}" alt="Adytia Darmawan, pembimbing tim" width="120" height="180" loading="lazy" decoding="async" class="w-full h-full  object-cover translate-y-1">
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">ADYTIA DARMAWAN, S.ST., M.T.</h4>
                                <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-wider">TEAM ADVISOR - MECHATRONICS</p>
                                <p class="text-gray-400 text-xs mt-2">Dosen pembimbing utama riset robotika.</p>
                            </div>
                        </div>

                        <div class="glass-panel p-6 rounded-2xl flex items-center gap-6 mb-6 hover:bg-white/5 transition duration-300">
                            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-cyan-500/30 shrink-0">
                                <img src="{{ asset('img/team/pakluqy.webp') }}" alt="Lucky Pradigta, pembimbing tim" width="400" height="600" loading="lazy" decoding="async" class="w-full h-full  object-cover translate-y-1">
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">LUCKY PRADIGTA S.R., S.ST., M.T.</h4>
                                <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-wider">TEAM ADVISOR - INDUSTRIAL ELECTRO</p>
                                <p class="text-gray-400 text-xs mt-2">Dosen pembimbing utama riset robotika.</p>
                            </div>
                        </div>
                </div>

                <div>
                    <h3 class="font-bold uppercase tracking-widest mb-8 border-l-4 border-purple-500 pl-6 text-xl">Our Journey</h3>
                    <div class="relative border-l-2 border-white/10 ml-4 space-y-10 py-2">
                        
                        <div class="relative pl-10">
                            <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-cyan-500 shadow-[0_0_15px_#22d3ee]"></span>
                            <span class="text-cyan-400 font-bold text-xs block mb-1">CURRENT GOAL</span>
                            <h4 class="font-bold text-lg">Kompetisi Kapal indonesia & Teknofest Turkey</h4>
                            <p class="text-gray-400 text-sm mt-1">Fokus pada pengembangan sistem otonom tingkat lanjut untuk kompetisi internasional.</p>
                        </div>
                        
                        <div class="relative pl-10">
                            <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-gray-600 border-2 border-black"></span>
                            <span class="text-gray-400 font-bold text-xs block mb-1">2024</span>
                            <h4 class="font-bold text-lg">Consistent Excellence</h4>
                            <p class="text-gray-400 text-sm mt-1">Juara 3 Nasional & Regional KRBAI.</p>
                        </div>
                        
                        <div class="relative pl-10">
                            <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-gray-600 border-2 border-black"></span>
                            <span class="text-gray-400 font-bold text-xs block mb-1">2023</span>
                            <h4 class="font-bold text-lg">The Beginning</h4>
                            <p class="text-gray-400 text-sm mt-1">Juara 2 Regional & Juara 3 Nasional di tahun debut.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center border-t border-white/10 pt-12 mt-12 pb-12">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-6">Connect With Us</p>
                <div class="flex justify-center gap-6 mb-8">
                    <a href="https://www.instagram.com/emosver.team/" target="_blank" rel="noopener noreferrer" aria-label="Instagram EMOSVER" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black hover:-translate-y-1 transition duration-300">
                        <x-icon name="instagram" class="text-xl" />
                    </a>
                    <a href="https://linkedin.com/company/emosver" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn EMOSVER" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black hover:-translate-y-1 transition duration-300">
                        <x-icon name="linkedin" class="text-xl" />
                    </a>
                    <a href="https://www.youtube.com/@emosver" target="_blank" rel="noopener noreferrer" aria-label="YouTube EMOSVER" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black hover:-translate-y-1 transition duration-300">
                        <x-icon name="youtube" class="text-xl" />
                    </a>
                </div>
                <p class="text-gray-600 text-[10px]">&copy; 2026 EMOSVER PENS. All Rights Reserved.</p>
            </div>

        </div>

    </div>
</body>
</html>