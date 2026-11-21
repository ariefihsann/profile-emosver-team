<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <title>Gallery - EMOSVER PENS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Fullscreen Reset */
        body { margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; background-color: #000; overflow: hidden; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

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
         class="relative w-full h-full bg-black flex flex-col">
        
        @include('components.navbar')
        
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('img/teamm.webp') }}');">
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm"></div>
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-32 pb-20 px-6 md:px-24">

            <div class="text-center mb-12">
                <span class="text-cyan-400 font-bold tracking-[0.5em] text-xs uppercase mb-4 block animate-pulse">Visual Archive</span>
                <h1 class="text-4xl md:text-6xl font-bold text-white font-tech uppercase drop-shadow-lg">
                    Capturing <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">The Moment</span>
                </h1>
            </div>

            <div x-data="{ 
                    current: 0, 
                    slides: [
                        { img: '{{ asset('img/awarding.webp') }}', title: 'KRBAI 2024 FINALS', desc: 'Momen kemenangan tim di tingkat nasional.' },
                        { img: '{{ asset('img/dev.webp') }}', title: 'LAB DEVELOPMENT', desc: 'Proses perakitan sensor dan kalibrasi sistem.' },
                        { img: '{{ asset('img/testingg.webp') }}', title: 'POOL TESTING', desc: 'Uji coba manuver otonom di kolam renang.' }
                    ],
                    next() { this.current = (this.current === this.slides.length - 1) ? 0 : this.current + 1 },
                    prev() { this.current = (this.current === 0) ? this.slides.length - 1 : this.current - 1 },
                    init() { setInterval(() => { this.next() }, 5000); }
                 }" class="relative w-full h-[300px] md:h-[500px] rounded-3xl overflow-hidden mb-16 border border-white/10 group/slider shadow-2xl">
                
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="current === index" 
                         x-transition:enter="transition ease-out duration-700"
                         x-transition:enter-start="opacity-0 scale-105"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="absolute inset-0 bg-cover bg-center" :style="`background-image: url('${slide.img}')`">
                         <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                         <div class="absolute bottom-8 left-8 md:bottom-16 md:left-16 max-w-2xl">
                             <h2 class="text-3xl md:text-5xl font-tech font-bold text-white mb-2 drop-shadow-md" x-text="slide.title"></h2>
                             <p class="text-gray-300 text-sm md:text-lg drop-shadow-md" x-text="slide.desc"></p>
                         </div>
                    </div>
                </template>

                <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/50 backdrop-blur rounded-full text-white hover:bg-cyan-500 hover:text-black transition flex items-center justify-center opacity-0 group-hover/slider:opacity-100 border border-white/20">
                    <x-icon name="chevron-left" class="" />
                </button>
                <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/50 backdrop-blur rounded-full text-white hover:bg-cyan-500 hover:text-black transition flex items-center justify-center opacity-0 group-hover/slider:opacity-100 border border-white/20">
                    <x-icon name="chevron-right" class="" />
                </button>
            </div>

            <div class="mb-24">
                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-cyan-600 text-white border-cyan-600' : 'bg-transparent text-gray-400 border-gray-700 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">All Photos</button>
                    <button @click="activeTab = 'competition'" :class="activeTab === 'competition' ? 'bg-cyan-600 text-white border-cyan-600' : 'bg-transparent text-gray-400 border-gray-700 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Competition</button>
                    <button @click="activeTab = 'dev'" :class="activeTab === 'dev' ? 'bg-cyan-600 text-white border-cyan-600' : 'bg-transparent text-gray-400 border-gray-700 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Development</button>
                    <button @click="activeTab = 'team'" :class="activeTab === 'team' ? 'bg-cyan-600 text-white border-cyan-600' : 'bg-transparent text-gray-400 border-gray-700 hover:border-white hover:text-white'" class="px-6 py-2 rounded-full border text-xs font-bold uppercase tracking-wider transition">Fun Moments</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div x-show="activeTab === 'all' || activeTab === 'competition'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/competition.webp') }}', 'KRBAI 2023 Finals')">
                        <img src="{{ asset('img/competition.webp') }}" alt="Tim EMOSVER pada final KRBAI 2023" width="1200" height="900" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-cyan-900/80 text-cyan-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-cyan-500/30">Competition</span>
                        </div>
                    </div>

                    <div x-show="activeTab === 'all' || activeTab === 'dev'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/dev.webp') }}', 'Preparing for Assembly')">
                        <img src="{{ asset('img/dev.webp') }}" alt="Proses perakitan dan kalibrasi robot bawah air" width="1200" height="800" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-purple-900/80 text-purple-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-purple-500/30">Dev</span>
                        </div>
                    </div>

                    <div x-show="activeTab === 'all' || activeTab === 'team'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/fun.webp') }}', 'Team Briefing')">
                        <img src="{{ asset('img/fun.webp') }}" alt="Sesi briefing tim EMOSVER" width="1200" height="900" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-green-900/80 text-green-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-green-500/30">Team</span>
                        </div>
                    </div>
                    
                    <div x-show="activeTab === 'all' || activeTab === 'dev'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/solder.webp') }}', 'Soldering PCB')">
                        <img src="{{ asset('img/solder.webp') }}" alt="Penyolderan PCB sistem kontrol robot" width="1200" height="571" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-purple-900/80 text-purple-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-purple-500/30">Dev</span>
                        </div>
                    </div>

                     <div x-show="activeTab === 'all' || activeTab === 'competition'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/teamm.webp') }}', 'Pool Arena')">
                        <img src="{{ asset('img/teamm.webp') }}" alt="Tim EMOSVER di area kolam pengujian" width="1200" height="675" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-cyan-900/80 text-cyan-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-cyan-500/30">Competition</span>
                        </div>
                    </div>

                     <div x-show="activeTab === 'all' || activeTab === 'team'" class="relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group/img border border-white/10" @click="openModal('{{ asset('img/after.webp') }}', 'After Competition')">
                        <img src="{{ asset('img/after.webp') }}" alt="Foto bersama tim setelah kompetisi" width="1200" height="675" loading="lazy" decoding="async" class="w-full h-full object-cover transition duration-700 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover/img:opacity-100 transition duration-300 flex items-center justify-center">
                            <x-icon name="expand" class="text-white text-3xl" />
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-green-900/80 text-green-400 text-[10px] px-2 py-1 rounded font-bold uppercase border border-green-500/30">Team</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-black/40 border border-white/10 rounded-3xl p-8 mb-24">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl text-white font-tech uppercase">Latest Mission Log</h2>
                    <a href="https://youtu.be/UfjpnlcB18k" target="_blank" class="text-cyan-400 text-xs uppercase tracking-widest hover:text-white transition flex items-center gap-2">Visit Youtube <x-icon name="arrow-right" class="" /></a>
                </div>
                
                <div x-data="{ isPlaying: false }" class="aspect-video w-full bg-gray-900 rounded-2xl overflow-hidden relative group/video shadow-2xl border border-white/10">
                    
                    <div x-show="!isPlaying" 
                         class="absolute inset-0 z-20 flex items-center justify-center cursor-pointer"
                         @click="isPlaying = true; $nextTick(() => $refs.player.play())">
                        
                        <img src="{{ asset('img/aftermovie-poster.webp') }}" alt="Poster aftermovie KRBAI 2024" width="1280" height="720" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover/video:opacity-50 transition duration-500">
                        
                        <div class="w-20 h-20 rounded-full border-2 border-white flex items-center justify-center pl-1 bg-white/10 backdrop-blur-sm group-hover/video:bg-cyan-500 group-hover/video:border-cyan-500 group-hover/video:text-black text-white transition duration-300 transform group-hover/video:scale-110 z-10 shadow-[0_0_30px_rgba(0,0,0,0.5)]">
                            <x-icon name="play" class="text-3xl" />
                        </div>

                        <p class="absolute bottom-6 text-white font-tech tracking-widest uppercase text-sm drop-shadow-md">KRBAI 2024 - Aftermovie</p>
                    </div>

                    <video x-ref="player"
                           x-show="isPlaying"
                           class="w-full h-full object-cover"
                           preload="none"
                           playsinline
                           controls>
                        <source src="{{ asset('video/aftermovie-720p.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>

                </div>
            </div>

            <div class="text-center border-t border-white/10 pt-12 mt-12 pb-12">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-6">FOLLOW OUR JOURNEY</p>
                <div class="flex justify-center gap-6 mb-8">
                    <a href="https://www.instagram.com/emosver.team/" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black hover:scale-110 transition duration-300">
                        <x-icon name="instagram" class="text-xl" />
                    </a>
                    <a href="https://linkedin.com/company/emosver" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black hover:scale-110 transition duration-300">
                        <x-icon name="linkedin" class="text-xl" />
                    </a>
                    <a href="https://www.youtube.com/@emosver" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black hover:scale-110 transition duration-300">
                        <x-icon name="youtube" class="text-xl" />
                    </a>
                </div>
                <p class="text-gray-600 text-[10px]">&copy; 2026 EMOSVER PENS. All Rights Reserved.</p>
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
                <x-icon name="xmark" class="" />
            </button>

            <div @click.outside="modalOpen = false" class="max-w-5xl w-full max-h-[90vh] flex flex-col items-center">
                <img :src="modalImage" x-show="modalImage" alt="Detail foto gallery EMOSVER" class="max-w-full max-h-[80vh] rounded-lg shadow-[0_0_30px_rgba(34,211,238,0.2)]">
                <h3 class="text-white font-tech text-xl mt-4 tracking-widest uppercase" x-text="modalTitle"></h3>
            </div>
        </div>

    </div>
</body>
</html>