<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Specs - EMOSVER PENS</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #f3f4f6; }
        .font-tech { font-family: 'Orbitron', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Blueprint Grid Pattern */
        .bg-blueprint {
            background-color: #050505;
            background-image: 
                linear-gradient(rgba(34, 211, 238, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(34, 211, 238, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Radar Animation */
        @keyframes scan {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-0 md:p-4 bg-gray-100">

    <div class="relative w-full h-full max-w-[1920px] mx-auto bg-black md:rounded-[40px] overflow-hidden shadow-2xl group flex flex-col">
        
        @include('components.navbar')
        
        <div class="absolute inset-0 bg-blueprint z-0 pointer-events-none">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/80"></div>
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-28 pb-20 px-6 md:px-24">

            <div class="flex flex-col md:flex-row items-center justify-between mb-24">
                
                <div class="text-center md:text-left mb-10 md:mb-0">
                    <div class="inline-flex items-center gap-2 border border-cyan-500/30 bg-cyan-900/20 px-3 py-1 rounded mb-4">
                        <span class="text-cyan-400 font-bold tracking-widest text-[10px] uppercase font-tech">Generation 3.5</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-white font-tech uppercase drop-shadow-lg mb-4">
                        Technical <br> <span class="text-cyan-400">Blueprint</span>
                    </h1>
                    <p class="text-gray-400 text-sm max-w-md leading-relaxed">
                        Spesifikasi detail sistem EMOSVER AUV. Dirancang untuk ketahanan ekstrem dan manuver presisi tinggi.
                    </p>
                </div>

                <div class="relative w-64 h-64 md:w-80 md:h-80 flex items-center justify-center">
                    <div class="absolute inset-0 border border-cyan-500/20 rounded-full"></div>
                    <div class="absolute inset-4 border border-cyan-500/10 rounded-full border-dashed"></div>
                    <div class="absolute w-full h-full rounded-full border-t-2 border-cyan-500/50 animate-[scan_4s_linear_infinite] shadow-[0_0_20px_rgba(34,211,238,0.2)]"></div>
                    
                    <div class="relative z-10 w-48 h-48 bg-cyan-900/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-cyan-500/30">
                        <i class="fa-solid fa-robot text-6xl text-cyan-400"></i>
                    </div>

                    <div class="absolute -top-4 right-0 bg-black/80 border border-cyan-500/30 px-2 py-1 text-[10px] text-cyan-400 font-mono rounded">SENSORS: ACTIVE</div>
                    <div class="absolute -bottom-4 left-0 bg-black/80 border border-cyan-500/30 px-2 py-1 text-[10px] text-cyan-400 font-mono rounded">BATTERY: 98%</div>
                </div>
            </div>

            <div x-data="{ tab: 'mech' }" class="mb-24">
                <div class="flex flex-wrap justify-center gap-4 mb-10 border-b border-white/10 pb-6">
                    <button @click="tab = 'mech'" :class="tab === 'mech' ? 'bg-cyan-500 text-black font-bold' : 'bg-transparent text-gray-400 border border-gray-700 hover:border-white hover:text-white'" class="px-8 py-3 rounded-xl transition uppercase tracking-widest text-xs font-tech">
                        Mechanical
                    </button>
                    <button @click="tab = 'elec'" :class="tab === 'elec' ? 'bg-yellow-500 text-black font-bold' : 'bg-transparent text-gray-400 border border-gray-700 hover:border-white hover:text-white'" class="px-8 py-3 rounded-xl transition uppercase tracking-widest text-xs font-tech">
                        Electrical
                    </button>
                    <button @click="tab = 'soft'" :class="tab === 'soft' ? 'bg-purple-500 text-black font-bold' : 'bg-transparent text-gray-400 border border-gray-700 hover:border-white hover:text-white'" class="px-8 py-3 rounded-xl transition uppercase tracking-widest text-xs font-tech">
                        Software & AI
                    </button>
                </div>

                <div x-show="tab === 'mech'" class="grid grid-cols-1 md:grid-cols-3 gap-6 animate-[fadeIn_0.5s_ease-out]">
                    <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                        <div class="text-cyan-400 text-3xl mb-2"><i class="fa-solid fa-ruler-combined"></i></div>
                        <h3 class="text-white font-bold uppercase mb-1">Dimensions</h3>
                        <p class="text-gray-400 text-sm">65 cm (L) x 40 cm (W) x 35 cm (H)</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                        <div class="text-cyan-400 text-3xl mb-2"><i class="fa-solid fa-weight-hanging"></i></div>
                        <h3 class="text-white font-bold uppercase mb-1">Weight</h3>
                        <p class="text-gray-400 text-sm">18.5 Kg (Dry Weight)</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                        <div class="text-cyan-400 text-3xl mb-2"><i class="fa-solid fa-cube"></i></div>
                        <h3 class="text-white font-bold uppercase mb-1">Material</h3>
                        <p class="text-gray-400 text-sm">Acrylic & Aluminum 6061 Frame</p>
                    </div>
                    <div class="md:col-span-3 bg-white/5 border border-white/10 p-6 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6">
                        <div>
                            <h3 class="text-white font-bold uppercase mb-1">Max Depth Rating</h3>
                            <p class="text-gray-400 text-sm">Tested up to 100 meters underwater pressure.</p>
                        </div>
                        <div class="text-4xl font-tech text-cyan-400 font-bold">100m</div>
                    </div>
                </div>

                <div x-show="tab === 'elec'" class="grid grid-cols-1 md:grid-cols-2 gap-6 animate-[fadeIn_0.5s_ease-out]" style="display: none;">
                    <div class="bg-white/5 border border-yellow-500/30 p-6 rounded-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4 opacity-20"><i class="fa-solid fa-microchip text-6xl text-yellow-500"></i></div>
                        <h3 class="text-white font-bold uppercase mb-2">Main Computer</h3>
                        <p class="text-yellow-400 font-mono text-lg mb-1">Nvidia Jetson Orin Nano</p>
                        <p class="text-gray-500 text-xs">High performance AI processing unit for computer vision.</p>
                    </div>
                    <div class="bg-white/5 border border-yellow-500/30 p-6 rounded-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4 opacity-20"><i class="fa-solid fa-car-battery text-6xl text-yellow-500"></i></div>
                        <h3 class="text-white font-bold uppercase mb-2">Power Source</h3>
                        <p class="text-yellow-400 font-mono text-lg mb-1">LiPo 4S 16000mAh</p>
                        <p class="text-gray-500 text-xs">Dual battery configuration for 4 hours runtime.</p>
                    </div>
                    <div class="col-span-1 md:col-span-2 bg-white/5 border border-white/10 p-6 rounded-2xl">
                        <h3 class="text-white font-bold uppercase mb-4">Sensor Suite</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                            <div class="p-3 bg-black/40 rounded border border-white/5"><span class="text-gray-300 text-xs font-bold block">IMU</span><span class="text-yellow-500 text-[10px]">9-Axis</span></div>
                            <div class="p-3 bg-black/40 rounded border border-white/5"><span class="text-gray-300 text-xs font-bold block">Depth</span><span class="text-yellow-500 text-[10px]">Bar 30</span></div>
                            <div class="p-3 bg-black/40 rounded border border-white/5"><span class="text-gray-300 text-xs font-bold block">Camera</span><span class="text-yellow-500 text-[10px]">ZED 2i Stereo</span></div>
                            <div class="p-3 bg-black/40 rounded border border-white/5"><span class="text-gray-300 text-xs font-bold block">DVL</span><span class="text-yellow-500 text-[10px]">Waterlinked</span></div>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'soft'" class="space-y-6 animate-[fadeIn_0.5s_ease-out]" style="display: none;">
                    <div class="bg-white/5 border border-purple-500/30 p-8 rounded-2xl">
                        <div class="flex justify-between items-end mb-4">
                            <h3 class="text-white font-bold uppercase text-lg">AI Detection Accuracy</h3>
                            <span class="text-purple-400 font-bold text-2xl">98%</span>
                        </div>
                        <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                            <div class="bg-purple-500 h-full w-[98%] shadow-[0_0_10px_#a855f7]"></div>
                        </div>
                        <p class="text-gray-400 text-xs mt-4">Using YOLOv8 custom trained model for underwater object recognition.</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="p-6 bg-black/40 border border-white/10 rounded-xl text-center">
                            <i class="fa-brands fa-linux text-4xl text-gray-500 mb-4"></i>
                            <h4 class="text-white font-bold">Ubuntu 20.04</h4>
                            <p class="text-gray-500 text-xs">Operating System</p>
                        </div>
                        <div class="p-6 bg-black/40 border border-white/10 rounded-xl text-center">
                            <i class="fa-solid fa-robot text-4xl text-gray-500 mb-4"></i>
                            <h4 class="text-white font-bold">ROS 2 Humble</h4>
                            <p class="text-gray-500 text-xs">Robot Middleware</p>
                        </div>
                        <div class="p-6 bg-black/40 border border-white/10 rounded-xl text-center">
                            <i class="fa-solid fa-code-branch text-4xl text-gray-500 mb-4"></i>
                            <h4 class="text-white font-bold">OpenCV</h4>
                            <p class="text-gray-500 text-xs">Image Processing</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-24">
                <h2 class="text-2xl text-white font-tech uppercase mb-8 border-l-4 border-cyan-400 pl-4">Hardware Deep Dive</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="flex gap-6 items-start group/item">
                        <div class="w-24 h-24 bg-gray-800 rounded-xl overflow-hidden border border-white/10 shrink-0">
                             <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2070" class="w-full h-full object-cover grayscale group-hover/item:grayscale-0 transition">
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-1 group-hover/item:text-cyan-400 transition">BlueRobotics T200</h4>
                            <span class="text-[10px] bg-cyan-900 text-cyan-400 px-2 py-0.5 rounded uppercase font-bold">Thruster</span>
                            <p class="text-gray-400 text-xs mt-2 leading-relaxed">
                                Thruster bawah air paling andal di kelasnya. Konfigurasi 8 thruster vectored memberikan gerakan 6-DOF penuh.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6 items-start group/item">
                        <div class="w-24 h-24 bg-gray-800 rounded-xl overflow-hidden border border-white/10 shrink-0">
                             <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070" class="w-full h-full object-cover grayscale group-hover/item:grayscale-0 transition">
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-1 group-hover/item:text-cyan-400 transition">ZED 2i Stereo Camera</h4>
                            <span class="text-[10px] bg-cyan-900 text-cyan-400 px-2 py-0.5 rounded uppercase font-bold">Vision</span>
                            <p class="text-gray-400 text-xs mt-2 leading-relaxed">
                                Kamera stereo dengan kemampuan depth sensing untuk pemetaan 3D dan deteksi jarak objek secara real-time.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center border-t border-white/10 pt-8 mt-10">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-4">Want full technical datasheet?</p>
                <button class="px-8 py-3 rounded-full border border-gray-600 text-gray-300 font-bold text-sm hover:bg-cyan-500 hover:text-black hover:border-cyan-500 transition flex items-center justify-center gap-2 mx-auto">
                    <i class="fa-solid fa-file-pdf"></i> Download PDF
                </button>
            </div>

        </div>

    </div>
</body>
</html>