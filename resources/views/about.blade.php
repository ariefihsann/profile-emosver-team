<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Team - EMOSVER PENS</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #f3f4f6; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-0 md:p-4 bg-gray-100">

    <div class="relative w-full h-full max-w-[1920px] mx-auto bg-black md:rounded-[40px] overflow-hidden shadow-2xl group flex flex-col">
        
        @include('components.navbar')
        
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2024/07/WEB-KRI-DAY-1-1-1080x675.jpg');">
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm"></div>
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-28 pb-20 px-6 md:px-24">
            
            <div class="max-w-4xl mx-auto text-center mb-16">
                <span class="text-cyan-400 font-bold tracking-[0.5em] text-xs uppercase mb-4 block">Who We Are</span>
                <h1 class="text-4xl md:text-6xl font-bold text-white font-tech uppercase mb-6 leading-tight">
                    We Are <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">EMOSVER</span>
                </h1>
                <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Tim Robotika Bawah Air dari PENS yang berdedikasi untuk mengembangkan teknologi AUV (Autonomous Underwater Vehicle). Kami menggabungkan presisi mekanik, kecerdasan buatan, dan sistem kontrol canggih untuk menaklukkan kedalaman.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto mb-24 items-center">
                <div class="relative h-64 md:h-80 rounded-2xl overflow-hidden border border-white/10 group/img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" class="w-full h-full object-cover grayscale group-hover/img:grayscale-0 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white font-tech text-xl">The Deep Vision</h3>
                        <p class="text-cyan-400 text-xs tracking-widest uppercase">Since 2023</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <h2 class="text-2xl text-white font-tech uppercase border-l-4 border-cyan-400 pl-4">Our Philosophy</h2>
                    
                    <div class="bg-white/5 border border-white/10 p-4 rounded-xl">
                        <h4 class="text-white font-bold mb-1 flex items-center gap-2"><i class="fa-solid fa-anchor text-cyan-400"></i> Resilience</h4>
                        <p class="text-gray-400 text-xs">Seperti tekanan laut dalam, kami percaya ketahanan adalah kunci. Kami membangun sistem yang tangguh menghadapi segala rintangan.</p>
                    </div>
                    
                    <div class="bg-white/5 border border-white/10 p-4 rounded-xl">
                        <h4 class="text-white font-bold mb-1 flex items-center gap-2"><i class="fa-solid fa-lightbulb text-yellow-400"></i> Innovation</h4>
                        <p class="text-gray-400 text-xs">Tidak sekadar menyelam, tapi memahami. Kami menciptakan AI yang mampu "melihat" dan "berpikir" di bawah air.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 p-4 rounded-xl">
                        <h4 class="text-white font-bold mb-1 flex items-center gap-2"><i class="fa-solid fa-users text-purple-400"></i> Synergy</h4>
                        <p class="text-gray-400 text-xs">Lima pikiran, satu tujuan. Kolaborasi antara mekanik, elektrik, dan software adalah jantung EMOSVER.</p>
                    </div>
                </div>
            </div>

            <div class="max-w-5xl mx-auto mb-24">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-white font-tech uppercase mb-2">The Squad</h2>
                    <span class="text-cyan-400 text-xs font-bold bg-cyan-900/30 px-4 py-1 rounded-full">5 Core Members</span>
                </div>

                <div class="flex flex-wrap justify-center gap-6">
                    
                    <div class="w-full sm:w-[calc(33%-1rem)] bg-black/40 border border-white/10 p-6 rounded-2xl text-center hover:-translate-y-2 transition duration-300 group/card">
                        <div class="w-24 h-24 rounded-full p-1 border-2 border-cyan-500 mx-auto mb-4 relative">
                            <img src="https://ui-avatars.com/api/?name=Agus+S&background=0D8ABC&color=fff&size=128" class="w-full h-full rounded-full object-cover grayscale group-hover/card:grayscale-0 transition">
                            <div class="absolute -bottom-2 -right-2 bg-cyan-500 text-black text-[10px] font-bold px-2 py-1 rounded-full">LEADER</div>
                        </div>
                        <h4 class="text-white font-bold text-lg">Agus Setiawan</h4>
                        <p class="text-cyan-400 text-xs uppercase tracking-widest font-bold mb-2">Management</p>
                        <p class="text-gray-500 text-[10px]">"Leadership is action, not position."</p>
                    </div>

                    <div class="w-full sm:w-[calc(33%-1rem)] bg-black/40 border border-white/10 p-6 rounded-2xl text-center hover:-translate-y-2 transition duration-300 group/card">
                        <div class="w-24 h-24 rounded-full p-1 border-2 border-purple-500 mx-auto mb-4 relative">
                            <img src="https://ui-avatars.com/api/?name=Siti+N&background=8b5cf6&color=fff&size=128" class="w-full h-full rounded-full object-cover grayscale group-hover/card:grayscale-0 transition">
                            <div class="absolute -bottom-2 -right-2 bg-purple-500 text-white text-[10px] font-bold px-2 py-1 rounded-full">CODE</div>
                        </div>
                        <h4 class="text-white font-bold text-lg">Siti Nurhaliza</h4>
                        <p class="text-purple-400 text-xs uppercase tracking-widest font-bold mb-2">Software & AI</p>
                        <p class="text-gray-500 text-[10px]">"Code speaks louder than words."</p>
                    </div>

                    <div class="w-full sm:w-[calc(33%-1rem)] bg-black/40 border border-white/10 p-6 rounded-2xl text-center hover:-translate-y-2 transition duration-300 group/card">
                        <div class="w-24 h-24 rounded-full p-1 border-2 border-orange-500 mx-auto mb-4 relative">
                            <img src="https://ui-avatars.com/api/?name=Budi+S&background=f97316&color=fff&size=128" class="w-full h-full rounded-full object-cover grayscale group-hover/card:grayscale-0 transition">
                            <div class="absolute -bottom-2 -right-2 bg-orange-500 text-black text-[10px] font-bold px-2 py-1 rounded-full">MECH</div>
                        </div>
                        <h4 class="text-white font-bold text-lg">Budi Santoso</h4>
                        <p class="text-orange-400 text-xs uppercase tracking-widest font-bold mb-2">Structure</p>
                        <p class="text-gray-500 text-[10px]">"Build it strong, make it last."</p>
                    </div>

                    <div class="w-full sm:w-[calc(33%-1rem)] bg-black/40 border border-white/10 p-6 rounded-2xl text-center hover:-translate-y-2 transition duration-300 group/card">
                        <div class="w-24 h-24 rounded-full p-1 border-2 border-yellow-500 mx-auto mb-4 relative">
                            <img src="https://ui-avatars.com/api/?name=Dewi+S&background=eab308&color=fff&size=128" class="w-full h-full rounded-full object-cover grayscale group-hover/card:grayscale-0 transition">
                            <div class="absolute -bottom-2 -right-2 bg-yellow-500 text-black text-[10px] font-bold px-2 py-1 rounded-full">ELEC</div>
                        </div>
                        <h4 class="text-white font-bold text-lg">Dewi Sartika</h4>
                        <p class="text-yellow-400 text-xs uppercase tracking-widest font-bold mb-2">Electronics</p>
                        <p class="text-gray-500 text-[10px]">"Powering the future."</p>
                    </div>

                    <div class="w-full sm:w-[calc(33%-1rem)] bg-black/40 border border-white/10 p-6 rounded-2xl text-center hover:-translate-y-2 transition duration-300 group/card">
                        <div class="w-24 h-24 rounded-full p-1 border-2 border-gray-400 mx-auto mb-4 relative">
                            <img src="https://ui-avatars.com/api/?name=Rizky+A&background=9ca3af&color=fff&size=128" class="w-full h-full rounded-full object-cover grayscale group-hover/card:grayscale-0 transition">
                            <div class="absolute -bottom-2 -right-2 bg-gray-400 text-black text-[10px] font-bold px-2 py-1 rounded-full">MGR</div>
                        </div>
                        <h4 class="text-white font-bold text-lg">Rizky Aditya</h4>
                        <p class="text-gray-400 text-xs uppercase tracking-widest font-bold mb-2">Official & Ops</p>
                        <p class="text-gray-500 text-[10px]">"Efficiency is key."</p>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto mb-16">
                
                <div>
                    <h3 class="text-white font-bold uppercase tracking-widest mb-6 border-l-4 border-cyan-400 pl-4">Advisor & Mentors</h3>
                    <div class="bg-white/5 border border-white/10 p-6 rounded-2xl flex items-center gap-6 mb-4 hover:bg-white/10 transition cursor-pointer">
                        <img src="https://ui-avatars.com/api/?name=Dosen+1&background=fff&color=000" class="w-16 h-16 rounded-full border border-gray-500">
                        <div>
                            <h4 class="text-white font-bold">Bapak Dosen Pembimbing</h4>
                            <p class="text-cyan-400 text-xs uppercase">Head of Robotics Lab</p>
                            <p class="text-gray-500 text-xs mt-1">Mengawasi riset dan pengembangan teknis.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-white font-bold uppercase tracking-widest mb-6 border-l-4 border-purple-500 pl-4">Our Journey</h3>
                    <div class="relative border-l border-gray-700 ml-3 space-y-8">
                        <div class="relative pl-8">
                            <span class="absolute -left-[5px] top-1 w-2.5 h-2.5 rounded-full bg-cyan-400 shadow-[0_0_10px_#22d3ee]"></span>
                            <span class="text-cyan-400 font-bold text-xs block mb-1">2026</span>
                            <h4 class="text-white font-bold text-sm">Target: KRBAI National</h4>
                            <p class="text-gray-500 text-xs mt-1">Mempersiapkan robot Gen-3 untuk kompetisi nasional.</p>
                        </div>
                        <div class="relative pl-8">
                            <span class="absolute -left-[5px] top-1 w-2.5 h-2.5 rounded-full bg-gray-500"></span>
                            <span class="text-gray-400 font-bold text-xs block mb-1">2025</span>
                            <h4 class="text-white font-bold text-sm">Best System Innovation</h4>
                            <p class="text-gray-500 text-xs mt-1">Mengembangkan sistem AI object detection pertama.</p>
                        </div>
                        <div class="relative pl-8">
                            <span class="absolute -left-[5px] top-1 w-2.5 h-2.5 rounded-full bg-gray-500"></span>
                            <span class="text-gray-400 font-bold text-xs block mb-1">2023</span>
                            <h4 class="text-white font-bold text-sm">Team Formation</h4>
                            <p class="text-gray-500 text-xs mt-1">EMOSVER resmi didirikan dengan 5 anggota inti.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center border-t border-white/10 pt-8 mt-10">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-4">Are you ready for the deep?</p>
                <div class="flex justify-center gap-4">
                    <button class="w-10 h-10 rounded-full border border-gray-600 text-gray-400 hover:text-white hover:border-white transition flex items-center justify-center">
                        <i class="fa-brands fa-instagram"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-gray-600 text-gray-400 hover:text-white hover:border-white transition flex items-center justify-center">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </button>
                </div>
                <p class="text-gray-600 text-[10px] mt-6">&copy; 2026 EMOSVER PENS. All Rights Reserved.</p>
            </div>

        </div>

    </div>
</body>
</html>