<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery - EMOSVER PENS</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #f3f4f6; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Custom Masonry-like Grid for nice gallery layout */
        .gallery-item { break-inside: avoid; margin-bottom: 1.5rem; }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-0 md:p-4 bg-gray-100">

    <div x-data="{ 
            activeTab: 'all', 
            modalOpen: false, 
            modalImage: '', 
            modalTitle: '',
            openModal(img, title) {
                this.modalImage = img;
                this.modalTitle = title;
                this.modalOpen = true;
            }
         }" 
         class="relative w-full h-full max-w-[1920px] mx-auto bg-black md:rounded-[40px] overflow-hidden shadow-2xl group flex flex-col">
        
        @include('components.navbar')
        
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2024/07/WEB-KRI-DAY-1-1-1080x675.jpg');">
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm"></div>
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-28 pb-20 px-6 md:px-24">

            <div class="text-center mb-12">
                <span class="text-cyan-400 font-bold tracking-[0.5em] text-xs uppercase mb-4 block">Visual Archive</span>
                <h1 class="text-4xl md:text-6xl font-bold text-white font-tech uppercase drop-shadow-lg">
                    Capturing <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">The Moment</span>
                </h1>
            </div>

            <div x-data="{ 
                    current: 0, 
                    slides: [
                        { img: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070', title: 'KRBAI 2025 FINALS', desc: 'Momen kemenangan tim di tingkat nasional.' },
                        { img: 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2070', title: 'LAB DEVELOPMENT', desc: 'Proses perakitan sensor dan kalibrasi sistem.' },
                        { img: 'https://images.unsplash.com/photo-1605218427306-633ba8719aa9?q=80&w=2070', title: 'POOL TESTING', desc: 'Uji coba manuver otonom di kolam renang.' }
                    ],
                    next() { this.current = (this.current === this.slides.length - 1) ? 0 : this.current + 1 },
                    prev() { this.current = (this.current === 0) ? this.slides.length - 1 : this.current - 1 },
                    init() { setInterval(() => { this.next() }, 5000); }
                 }" class="relative w-full h-[300px] md:h-[500px] rounded-3xl overflow-hidden mb-16 border border-white/10 group/slider">
                
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="current === index" 
                         x-transition:enter="transition ease-out duration-700"
                         x-transition:enter-start="opacity-0 scale-105"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="absolute inset-0 bg-cover bg-center" :style="`background-image: url('${slide.img}')`">
                         <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                         <div class="absolute bottom-8 left-8 md:bottom-16 md:left-16 max-w-2xl">
                             <h2 class="text-3xl md:text-5xl font-tech font-bold text-white mb-2" x-text="slide.title"></h2>
                             <p class="text-gray-300 text-sm md:text-lg" x-text="slide.desc"></p>
                         </div>
                    </div>
                </template>

                <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/50 backdrop-blur rounded-full text-white hover:bg-cyan-500 hover:text-black transition flex items-center justify-center opacity-0 group-hover/slider:opacity-100">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/50 backdrop-blur rounded-full text-white hover:bg-cyan-500 hover:text-black transition flex items-center justify-center opacity-0 group-hover/slider:opacity-100">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <div class="mb-24">
                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-cyan-500 text-black border-cyan-500' : 'bg-transparent text-gray-400 border-gray-600 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">All Photos</button>
                    <button @click="activeTab = 'competition'" :class="activeTab === 'competition' ? 'bg-cyan-500 text-black border-cyan-500' : 'bg-transparent text-gray-400 border-gray-600 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Competition</button>
                    <button @click="activeTab = 'dev'" :class="activeTab === 'dev' ? 'bg-cyan-500 text-black border-cyan-500' : 'bg-transparent text-gray-400 border-gray-600 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Development</button>
                    <button @click="activeTab = 'team'" :class="activeTab === 'team' ? 'bg-cyan-500 text-black border-cyan-500' : 'bg-transparent text-gray-400 border-gray-600 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Fun Moments</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div x-show="activeTab === 'all' || activeTab === 'competition'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070', 'Strategy Briefing')">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-cyan-900/80 text-cyan-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Competition</span>
                        </div>
                    </div>

                    <div x-show="activeTab === 'all' || activeTab === 'dev'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070', 'Coding Session')">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-purple-900/80 text-purple-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Dev</span>
                        </div>
                    </div>

                    <div x-show="activeTab === 'all' || activeTab === 'team'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070', 'Team Briefing')">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-green-900/80 text-green-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Team</span>
                        </div>
                    </div>
                    
                    <div x-show="activeTab === 'all' || activeTab === 'dev'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1593349480506-8433634cdcbe?q=80&w=2070', 'Soldering PCB')">
                        <img src="https://images.unsplash.com/photo-1593349480506-8433634cdcbe?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-purple-900/80 text-purple-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Dev</span>
                        </div>
                    </div>

                     <div x-show="activeTab === 'all' || activeTab === 'competition'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1574689211272-bc14e28bbc73?q=80&w=2070', 'Pool Arena')">
                        <img src="https://images.unsplash.com/photo-1574689211272-bc14e28bbc73?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-cyan-900/80 text-cyan-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Competition</span>
                        </div>
                    </div>

                     <div x-show="activeTab === 'all' || activeTab === 'team'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070', 'After Competition')">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070" class="w-full h-full object-cover transition duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-expand text-white text-3xl"></i>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-green-900/80 text-green-400 text-[10px] px-2 py-1 rounded font-bold uppercase">Team</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-black/40 border border-white/10 rounded-3xl p-8 mb-24">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl text-white font-tech uppercase">Latest Mission Log</h2>
                    <a href="#" class="text-cyan-400 text-xs uppercase tracking-widest hover:text-white transition">Visit Youtube <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="aspect-video w-full bg-gray-900 rounded-2xl flex items-center justify-center group/video cursor-pointer relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover/video:opacity-40 transition">
                    <div class="w-20 h-20 rounded-full border-2 border-white flex items-center justify-center pl-1 group-hover/video:bg-cyan-500 group-hover/video:border-cyan-500 group-hover/video:text-black text-white transition duration-300 z-10">
                        <i class="fa-solid fa-play text-3xl"></i>
                    </div>
                    <p class="absolute bottom-6 text-white font-bold tracking-widest uppercase text-sm">KRBAI 2025 - Aftermovie</p>
                </div>
            </div>

            <div class="text-center border-t border-white/10 pt-8 mt-10">
                <p class="text-gray-500 text-xs">FOLLOW OUR JOURNEY</p>
                <div class="flex justify-center gap-4 mt-4">
                    <button class="w-10 h-10 rounded-full border border-gray-600 text-gray-400 hover:text-white hover:border-white transition flex items-center justify-center">
                        <i class="fa-brands fa-instagram"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-gray-600 text-gray-400 hover:text-white hover:border-white transition flex items-center justify-center">
                        <i class="fa-brands fa-youtube"></i>
                    </button>
                </div>
            </div>

        </div>

        <div x-show="modalOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 p-4 backdrop-blur-md">
            
            <button @click="modalOpen = false" class="absolute top-6 right-6 text-white text-4xl hover:text-cyan-400 transition">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div @click.outside="modalOpen = false" class="max-w-5xl w-full max-h-[90vh] flex flex-col items-center">
                <img :src="modalImage" class="max-w-full max-h-[80vh] rounded-lg shadow-[0_0_30px_rgba(34,211,238,0.2)]">
                <h3 class="text-white font-tech text-xl mt-4 tracking-widest uppercase" x-text="modalTitle"></h3>
            </div>
        </div>

    </div>
</body>
</html>