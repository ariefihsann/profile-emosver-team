<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMOSVER - PENS Underwater Robotics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f3f4f6; /* Warna border luar */
        }
        .font-tech {
            font-family: 'Orbitron', sans-serif;
        }
        /* Custom Scrollbar hide */
        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-2 sm:p-4 overflow-hidden bg-white">

    <div class="relative w-full h-full max-w-[1920px] mx-auto bg-black rounded-[40px] overflow-hidden shadow-2xl group">
        
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" 
             style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2024/07/WEB-KRI-DAY-1-1-1080x675.jpg');">
            
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        </div>

        <nav class="absolute top-10 left-10 z-20 flex items-center gap-12 text-white">
            <div class="flex flex-col">
                <i class="fa-solid fa-atom text-4xl animate-spin-slow"></i>
                <span class="text-xs font-bold tracking-widest mt-1">PENS</span>
            </div>

            <ul class="hidden md:flex gap-8 text-sm font-medium tracking-wide">
                <li class="border-b-2 border-white pb-1 cursor-pointer">Home</li>
                <li class="text-gray-300 hover:text-white transition cursor-pointer">About Team</li>
                <li class="text-gray-300 hover:text-white transition cursor-pointer">Gallery</li>
                <li class="text-gray-300 hover:text-white transition cursor-pointer">Tech Specs</li>
            </ul>
        </nav>

        <div class="absolute top-0 right-0 bg-white z-20 pl-6 pb-6 rounded-bl-[40px]">
            <div class="flex items-center gap-4 pt-4 pr-4">
                <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition">
                    <i class="fa-brands fa-instagram"></i>
                </button>
                <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition">
                    <i class="fa-brands fa-youtube"></i> 
                </button>
                <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition">
                    <i class="fa-brands fa-facebook-f"></i>
                </button>

                <button class="px-6 py-2.5 rounded-full border border-gray-300 text-sm font-bold hover:bg-black hover:text-white transition flex items-center gap-2">
                    Explore Now 
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </button>
            </div>
            
            <div class="absolute -bottom-5 right-0 w-5 h-5 bg-transparent shadow-[5px_-5px_0_0_#fff] rounded-tr-[20px] pointer-events-none hidden"></div>
        </div>

        <div class="absolute top-1/2 -translate-y-1/2 left-10 md:left-24 z-10 max-w-4xl">
            <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight font-tech uppercase drop-shadow-lg">
                Innovation <br>
                Beneath The <br>
                Surface
            </h1>
            
            <div class="mt-8 flex items-center gap-4 cursor-pointer group/play">
                <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center pl-1 group-hover/play:bg-white group-hover/play:text-black transition">
                    <i class="fa-solid fa-play"></i>
                </div>
                <span class="text-white text-sm tracking-widest uppercase font-semibold">Watch Simulation</span>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 bg-white z-20 pr-10 pt-8 rounded-tr-[40px] min-w-[350px]">
            <div class="flex justify-around items-center px-6 pb-6">
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-black">100<span class="text-sm align-top">+</span></span>
                    <span class="text-xs text-gray-500 font-medium">Meter Depth</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-black">4<span class="text-sm align-top">h</span></span>
                    <span class="text-xs text-gray-500 font-medium">Runtime</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-black">AI</span>
                    <span class="text-xs text-gray-500 font-medium">Object Detection</span>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 right-24 z-10 w-[350px]">
            <div class="bg-black/40 backdrop-blur-md border border-white/20 p-6 rounded-3xl text-white">
                <h3 class="text-sm font-bold text-gray-300 uppercase tracking-widest mb-2">Experience The Deep</h3>
                <p class="text-xs text-gray-300 leading-relaxed mb-6">
                    Menjelajahi keindahan dan tantangan bawah air dengan teknologi robotika canggih dari PENS. Presisi navigasi dan ketahanan sistem untuk masa depan maritim Indonesia.
                </p>
                <button class="w-full py-3 rounded-full border border-white/30 text-xs hover:bg-white hover:text-black transition uppercase font-bold">
                    Explore EMOSVER
                </button>
            </div>
        </div>

        <div class="absolute top-1/2 -translate-y-1/2 right-8 z-10 flex flex-col items-center gap-4 text-white">
            <span class="text-xs font-bold rotate-90 origin-center mb-4">01</span>
            
            <div class="h-32 w-[1px] bg-white/30 relative">
                <div class="absolute top-0 left-0 w-full h-1/3 bg-white"></div>
            </div>
            
            <span class="text-xs font-bold rotate-90 origin-center mt-4">04</span>
        </div>

    </div>
</body>
</html>