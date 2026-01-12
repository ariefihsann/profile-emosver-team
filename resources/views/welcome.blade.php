<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMOSVER - PENS Underwater Robotics</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #f3f4f6; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .blink-cursor { animation: blink 1s step-end infinite; }
        @keyframes blink { 50% { opacity: 0; } }

        /* ANIMASI SCROLL SPONSOR */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); } /* Geser setengah panjang total */
        }
        .animate-scroll {
            display: flex;
            width: max-content; /* Agar container memanjang sesuai isi */
            animation: scroll 30s linear infinite; /* 30 detik loop */
        }
        /* Agar animasi berhenti saat di-hover user */
        .animate-scroll:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-0 md:p-4 bg-gray-100 overflow-hidden">

    <div class="relative w-full h-full max-w-[1920px] mx-auto bg-black md:rounded-[40px] overflow-hidden shadow-2xl group flex flex-col">
        
        @include('components.navbar')

        <div class="flex-1 overflow-y-auto no-scrollbar scroll-smooth">
            
            <div class="relative w-full h-screen md:h-full min-h-[600px] flex flex-col justify-center">
                
                <div class="absolute inset-0 bg-cover bg-center z-0" 
                     style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2024/07/WEB-KRI-DAY-1-1-1080x675.jpg');">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black z-10"></div>
                </div>

                <div class="relative z-20 px-6 md:px-24 w-full mt-20 md:mt-0">
                    <div class="inline-flex items-center gap-2 border border-cyan-500/30 bg-cyan-900/20 px-3 py-1 rounded-full mb-6 backdrop-blur-sm">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                        <span class="text-cyan-400 font-bold tracking-widest text-[10px] md:text-xs uppercase font-tech">System Online</span>
                    </div>

                    <h1 class="text-4xl md:text-7xl font-bold text-white leading-tight font-tech uppercase drop-shadow-2xl mb-6">
                        Innovation <br>
                        Beneath The <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">Surface</span><span class="text-cyan-400 blink-cursor">_</span>
                    </h1>
                    
                    <p class="text-gray-300 text-sm md:text-base max-w-lg mb-8 leading-relaxed">
                        Tim Robot Bawah Air PENS (EMOSVER) mengembangkan Autonomous Underwater Vehicle (AUV) canggih untuk masa depan maritim Indonesia.
                    </p>
                    
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <div class="flex items-center gap-4 cursor-pointer group/play">
                            <div class="relative w-14 h-14 flex items-center justify-center">
                                <div class="absolute inset-0 bg-cyan-500 rounded-full opacity-20 animate-ping"></div>
                                <div class="relative w-14 h-14 rounded-full border border-white/30 bg-white/10 backdrop-blur-sm flex items-center justify-center pl-1 group-hover/play:bg-cyan-500 group-hover/play:border-cyan-500 group-hover/play:text-black transition duration-300 text-white">
                                    <i class="fa-solid fa-play text-xl"></i>
                                </div>
                            </div>
                            <div class="flex flex-col text-left">
                                <span class="text-white text-sm tracking-widest uppercase font-semibold">Simulation</span>
                                <span class="text-xs text-gray-400">Watch Demo</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 animate-bounce opacity-70">
                    <span class="text-[10px] text-gray-400 uppercase tracking-widest">Scroll Down</span>
                    <i class="fa-solid fa-chevron-down text-white"></i>
                </div>
            </div>

            <div class="relative z-20 bg-black border-t border-white/10 py-16 overflow-hidden">
                <div class="text-center mb-10 px-6">
                    <h4 class="text-cyan-400 font-bold tracking-[0.3em] text-xs uppercase mb-2">Supported By</h4>
                </div>

                <div class="relative w-full overflow-hidden mask-gradient">
                    <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-black to-transparent z-10"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-black to-transparent z-10"></div>
                    
                    <div class="animate-scroll">
                        <div class="flex gap-16 px-8">
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-building-columns text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">KEMENDIKBUD</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-robot text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PUSPRESNAS</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-bolt text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PLN INDONESIA</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-microchip text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">NVIDIA</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-satellite-dish text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">TELKOMSEL</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-ship text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PAL INDONESIA</span>
                            </div>
                        </div>

                        <div class="flex gap-16 px-8">
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-building-columns text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">KEMENDIKBUD</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-robot text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PUSPRESNAS</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-bolt text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PLN INDONESIA</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-microchip text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">NVIDIA</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-satellite-dish text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">TELKOMSEL</span>
                            </div>
                            <div class="flex items-center gap-3 grayscale hover:grayscale-0 transition opacity-50 hover:opacity-100 cursor-pointer">
                                <i class="fa-solid fa-ship text-4xl text-gray-400"></i>
                                <span class="text-lg font-bold text-white font-tech">PAL INDONESIA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative z-20 bg-[#050505] border-t border-white/5 py-16 px-6 md:px-24">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="bg-white p-2 rounded-full">
                                <img src="https://upload.wikimedia.org/wikipedia/id/4/44/Logo_PENS.png" alt="Logo" class="h-8 w-auto">
                            </div>
                            <span class="text-xl font-bold font-tech text-white">EMOSVER</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">
                            Divisi Robot Bawah Air (AUV) dari Politeknik Elektronika Negeri Surabaya.
                        </p>
                        <div class="text-gray-500 text-xs">
                            &copy; 2026 EMOSVER Team PENS.
                        </div>
                    </div>
                    <div>
                        <h3 class="text-white font-bold uppercase tracking-widest mb-6 border-b border-cyan-500/30 pb-2 inline-block">Basecamp</h3>
                        <ul class="space-y-4 text-sm text-gray-400">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-map-location-dot text-cyan-400 mt-1"></i>
                                <span>Gedung Robotika PENS Lt. 2,<br>Jl. Raya ITS, Surabaya</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-envelope text-cyan-400"></i>
                                <span>emosver@pens.ac.id</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-bold uppercase tracking-widest mb-6 border-b border-cyan-500/30 pb-2 inline-block">Connect</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-cyan-500 hover:text-black hover:scale-110 transition duration-300">
                                <i class="fa-brands fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-cyan-500 hover:text-black hover:scale-110 transition duration-300">
                                <i class="fa-brands fa-youtube text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div> </div>
</body>
</html>