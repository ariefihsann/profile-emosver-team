<div id="page-transition-curtain" class="fixed inset-0 z-[9999] bg-black pointer-events-none flex flex-col justify-end transition-all duration-700 ease-[cubic-bezier(0.65,0,0.35,1)]">
    <div class="w-full h-1 bg-cyan-500 shadow-[0_0_15px_#06b6d4]"></div>
</div>

<nav x-data="{ mobileOpen: false }" 
     class="absolute top-0 left-0 w-full z-50 pointer-events-none transition-all duration-300
            h-32 bg-gradient-to-b from-black/95 via-black/70 to-transparent backdrop-blur-[2px]">
            <div class="flex items-center w-full px-6 py-6 md:px-12 md:py-8 pointer-events-auto">

        <div class="flex items-center gap-3 cursor-pointer hover-scale-trigger" onclick="window.location.href='{{ route('home') }}'">
            <div class="bg-white p-2 rounded-full shadow-lg shadow-cyan-500/20 transition duration-300 logo-bg">
                <img src="https://upload.wikimedia.org/wikipedia/id/4/44/Logo_PENS.png" alt="Logo PENS" class="h-8 w-auto">
            </div>
            <div class="flex flex-col drop-shadow-md">
                <span class="text-sm font-bold tracking-widest font-tech text-white leading-none logo-text transition">EMOSVER</span>
                <span class="text-[10px] text-gray-300 tracking-wider">UNDERWATER ROBOTICS</span>
            </div>
        </div>

        <ul class="hidden md:flex gap-10 text-sm font-medium tracking-wide items-center ml-16">
            @foreach([['route'=>'home','label'=>'Home'], ['route'=>'about','label'=>'About Team'], ['route'=>'gallery','label'=>'Gallery'], ['route'=>'tech','label'=>'Tech Specs']] as $item)
            
            <li class="relative menu-item">
                <a href="{{ route($item['route']) }}" class="block py-2 transition-colors duration-300 {{ Route::is($item['route']) ? 'text-white' : 'text-gray-400 menu-link' }}">
                    {{ $item['label'] }}
                </a>
                
                <span class="menu-line absolute bottom-0 left-0 w-full h-[2px] bg-cyan-400 transform transition-transform duration-300 origin-left {{ Route::is($item['route']) ? 'scale-x-100' : 'scale-x-0' }}"></span>
            </li>
            @endforeach
        </ul>

        <button @click="mobileOpen = !mobileOpen" class="ml-auto md:hidden text-white text-2xl focus:outline-none p-2 rounded-lg border border-white/20 bg-black/30 backdrop-blur-md hover:bg-white/10 transition">
            <i class="fa-solid" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'"></i>
        </button>

    </div>

    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         class="md:hidden pointer-events-auto absolute top-24 left-0 w-full px-6 z-40">
        
        <div class="bg-black/95 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden p-6 shadow-2xl">
            <ul class="flex flex-col gap-3 text-center">
                @foreach([['route'=>'home','label'=>'Home'], ['route'=>'about','label'=>'About Team'], ['route'=>'gallery','label'=>'Gallery'], ['route'=>'tech','label'=>'Tech Specs']] as $item)
                <li>
                    <a href="{{ route($item['route']) }}" class="block py-3 text-sm font-bold tracking-widest uppercase rounded-xl transition-all duration-300 {{ Route::is($item['route']) ? 'text-black bg-cyan-400 shadow-[0_0_15px_#22d3ee]' : 'text-gray-300 hover:text-white hover:bg-white/10' }}">
                        {{ $item['label'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</nav>

<style>
    #page-transition-curtain { height: 100%; width: 100%; top: 0; left: 0; }
    .menu-item:hover .menu-line { transform: scaleX(1) !important; }
    .menu-item:hover .menu-link { color: #ffffff !important; }
    .hover-scale-trigger:hover .logo-bg { transform: scale(1.1); }
    .hover-scale-trigger:hover .logo-text { color: #22d3ee; }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const curtain = document.getElementById('page-transition-curtain');
        setTimeout(() => { curtain.style.height = '0%'; }, 100);

        const links = document.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetUrl = this.href;
                if (targetUrl && targetUrl.indexOf(window.location.hostname) > -1 && !targetUrl.includes('#') && this.target !== '_blank') {
                    e.preventDefault();
                    curtain.style.top = '0';
                    curtain.style.height = '100%';
                    setTimeout(() => { window.location.href = targetUrl; }, 700);
                }
            });
        });
    });
</script>