<div id="page-loader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black transition-all duration-300 ease-in-out" aria-hidden="true">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-2xl"></div>
    
    <div class="relative flex items-center justify-center">
        <div class="w-20 h-20 border border-cyan-500/10 rounded-full"></div>
        <div class="absolute w-20 h-20 border-2 border-t-cyan-400 border-r-transparent border-b-transparent border-l-transparent rounded-full animate-[spin_0.8s_linear_infinite]"></div>
        <div class="absolute">
            <div class="w-2 h-2 bg-cyan-400 rounded-full shadow-[0_0_15px_rgba(34,211,238,0.8)] animate-pulse"></div>
        </div>
    </div>
</div>

<nav x-data="{ mobileOpen: false }" class="absolute top-0 left-0 w-full z-50 pointer-events-none transition-all duration-300 h-32 bg-gradient-to-b from-black/95 via-black/70 to-transparent backdrop-blur-[2px]">
    <div class="flex items-center w-full px-6 py-6 md:px-12 md:py-8 pointer-events-auto">
        <div class="flex items-center gap-3 cursor-pointer hover-scale-trigger" onclick="window.location.href='{{ route('home') }}'">
            <div class="bg-white p-2 rounded-full shadow-lg shadow-cyan-500/20 transition duration-300 logo-bg">
                <div class="logo-wrapper">
                    <img src="{{ asset('img/logo.jpg') }}" class="logo-zoom" alt="Logo">
                </div>
            </div>
            <div class="flex flex-col drop-shadow-md">
                <span class="text-sm font-bold tracking-widest font-tech text-white leading-none logo-text transition">EMOSVER</span>
                <span class="text-[10px] text-gray-300 tracking-wider">UNDERWATER ROBOTICS</span>
            </div>
        </div>

        <ul class="hidden md:flex gap-10 text-sm font-medium tracking-wide items-center ml-16">
            @foreach([['route'=>'home','label'=>'Home'], ['route'=>'about','label'=>'About Team'], ['route'=>'gallery','label'=>'Gallery'], ['route'=>'tech','label'=>'Contact']] as $item)
            <li class="relative menu-item">
                <a href="{{ route($item['route']) }}" class="block py-2 transition-colors duration-300 {{ Route::is($item['route']) ? 'text-white' : 'text-gray-400 menu-link' }}">
                    {{ $item['label'] }}
                </a>
                <span class="menu-line absolute bottom-0 left-0 w-full h-[2px] bg-cyan-400 transform transition-transform duration-300 origin-left {{ Route::is($item['route']) ? 'scale-x-100' : 'scale-x-0' }}"></span>
            </li>
            @endforeach
        </ul>

        <!-- Di sini @click diubah menjadi x-on:click agar tidak bentrok dengan Laravel Blade -->
        <button x-on:click="mobileOpen = !mobileOpen" aria-label="Buka menu" :aria-expanded="mobileOpen ? 'true' : 'false'" class="ml-auto md:hidden text-white text-2xl focus:outline-none p-2 rounded-lg border border-white/20 bg-black/30 backdrop-blur-md hover:bg-white/10 transition">
            <x-icon name="chevron-down" class="h-5 w-5" x-bind:class="mobileOpen ? 'rotate-180' : ''" />
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
                @foreach([['route'=>'home','label'=>'Home'], ['route'=>'about','label'=>'About Team'], ['route'=>'gallery','label'=>'Gallery'], ['route'=>'tech','label'=>'Contact']] as $item)
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
    .loader-hidden { opacity: 0 !important; visibility: hidden !important; transform: scale(1.05); }
    .loading-active { overflow: hidden !important; }
    .menu-item:hover .menu-line { transform: scaleX(1) !important; }
    .menu-item:hover .menu-link { color: #ffffff !important; }
    .hover-scale-trigger:hover .logo-bg { transform: scale(1.1); }
    .hover-scale-trigger:hover .logo-text { color: #22d3ee; }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.getElementById('page-loader');
        const body = document.body;

        function hideLoader() {
            if (loader && !loader.classList.contains('loader-hidden')) {
                loader.classList.add('loader-hidden');
                body.classList.remove('loading-active');
                setTimeout(() => { loader.style.display = 'none'; }, 700);
            }
        }

        window.addEventListener('load', hideLoader);
        setTimeout(hideLoader, 3000); 

        const links = document.querySelectorAll('a, .hover-scale-trigger');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                let targetUrl = this.href;
                
                if (!targetUrl && this.getAttribute('onclick')) {
                    const match = this.getAttribute('onclick').match(/'([^']+)'/);
                    if (match) targetUrl = match[1];
                }

                if (targetUrl && targetUrl.indexOf(window.location.hostname) > -1 && !targetUrl.includes('#') && this.target !== '_blank') {
                    e.preventDefault();
                    if(loader) {
                        loader.classList.remove('loader-hidden');
                        loader.style.display = 'flex'; 
                    }
                    body.classList.add('loading-active');
                    setTimeout(() => { window.location.href = targetUrl; }, 600);
                }
            });
        });
    });
</script>