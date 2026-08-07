<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <title>Contact - EMOSVER PENS</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Fullscreen Reset */
        body { margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; background-color: #000; overflow: hidden; }
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

        /* Input Autofill Fix */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus {
            -webkit-text-fill-color: #e5e7eb;
            -webkit-box-shadow: 0 0 0px 1000px #1f2937 inset;
            transition: background-color 5000s ease-in-out 0s;
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
        
        <div class="absolute inset-0 bg-blueprint z-0 pointer-events-none">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/80"></div>
        </div>

        <div class="relative z-20 flex-1 overflow-y-auto no-scrollbar pt-32 pb-20 px-6 md:px-24">

            <div class="flex flex-col md:flex-row items-start justify-between mb-16 gap-12 max-w-7xl mx-auto">
                
                {{-- Bagian Kiri: Info --}}
                <div class="text-center md:text-left w-full md:w-1/2">
                    <div class="inline-flex items-center gap-2 border border-cyan-500/30 bg-cyan-900/20 px-3 py-1 rounded mb-4">
                        <span class="text-cyan-400 font-bold tracking-widest text-[10px] uppercase font-tech">Get In Touch</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-white font-tech uppercase drop-shadow-lg mb-4">
                        Connect <br> <span class="text-cyan-400">With Us</span>
                    </h1>
                    <p class="text-gray-400 text-sm max-w-md leading-relaxed mb-8">
                        Tertarik berkolaborasi riset, sponsorship, atau ingin bergabung dengan tim? Sinyal komunikasi kami selalu aktif.
                    </p>

                    {{-- Info Kontak --}}
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 group/info">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shrink-0 group-hover/info:border-cyan-500/50 group-hover/info:bg-cyan-900/20 transition duration-300">
                                <i class="fa-solid fa-location-dot text-gray-400 group-hover/info:text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold uppercase text-sm mb-1">Basecamp</h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    Gedung D3, Politeknik Elektronika Negeri Surabaya.<br>
                                    Jl. Raya ITS, Sukolilo, Surabaya 60111
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group/info">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shrink-0 group-hover/info:border-cyan-500/50 group-hover/info:bg-cyan-900/20 transition duration-300">
                                <i class="fa-solid fa-envelope text-gray-400 group-hover/info:text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold uppercase text-sm mb-1">Email Transmission</h4>
                                <p class="text-gray-400 text-xs">krbai@event.pens.ac.id</p>
                                <p class="text-gray-500 text-[10px] mt-0.5">Respon dalam 1x24 jam kerja.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-8 justify-center md:justify-start">
                             <a href="https://www.instagram.com/emosver.team/" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:bg-cyan-600 hover:border-cyan-600 transition"><i class="fa-brands fa-instagram"></i></a>
                             <a href="https://linkedin.com/company/emosver" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600 transition"><i class="fa-brands fa-linkedin-in"></i></a>
                             <a href="#" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Bagian Kanan: Form --}}
                <div class="w-full md:w-1/2 bg-white/5 border border-white/10 p-8 rounded-3xl backdrop-blur-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-cyan-500/10 blur-2xl rounded-full pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-20 h-20 bg-purple-500/10 blur-2xl rounded-full pointer-events-none"></div>

                    <h3 class="text-white font-tech uppercase text-xl mb-6 flex items-center gap-3">
                        <i class="fa-regular fa-paper-plane text-cyan-400"></i> Send Message
                    </h3>

                   <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                            @csrf 
                            
                            @if(session('success'))
                                <div class="bg-green-500/20 border border-green-500 text-green-400 p-3 rounded text-xs">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Identity</label>
                                    <input type="text" name="name" placeholder="Nama Lengkap" class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-gray-200 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition text-sm placeholder-gray-600" required>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Contact</label>
                                    <input type="email" name="email" placeholder="Alamat Email" class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-gray-200 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition text-sm placeholder-gray-600" required>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Subject</label>
                                <select name="subject" class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-gray-200 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition text-sm cursor-pointer">
                                    <option value="" disabled selected>Pilih Keperluan...</option>
                                    <option value="Sponsorship & Partnership">Sponsorship & Partnership</option>
                                    <option value="Kunjungan Lab">Kunjungan Lab / Studi Banding</option>
                                    <option value="Open Recruitment">Open Recruitment</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Transmission Data</label>
                                <textarea name="message" rows="4" placeholder="Tulis pesan Anda di sini..." class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-gray-200 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition text-sm placeholder-gray-600 resize-none" required></textarea>
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-cyan-600 to-cyan-500 hover:from-cyan-500 hover:to-cyan-400 text-black font-bold py-3.5 rounded-lg transition transform hover:scale-[1.01] shadow-[0_0_20px_rgba(34,211,238,0.3)] uppercase tracking-widest text-xs font-tech">
                                Initiate Transmission
                            </button>
                        </form>
                </div>

            </div>

            {{-- Bagian Peta --}}
            <div class="w-full h-64 bg-gray-900 rounded-2xl overflow-hidden border border-white/10 grayscale hover:grayscale-0 transition duration-700 relative group/map max-w-7xl mx-auto">
                {{-- Update: Saya mengganti link dummy dengan embed map PENS asli agar tidak blank --}}
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.692023533932!2d112.79155207590393!3d-7.275841771497217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef0bc1!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
                <div class="absolute inset-0 bg-cyan-900/10 pointer-events-none group-hover/map:bg-transparent transition"></div>
                
                <div class="absolute bottom-4 left-4 bg-black/80 px-4 py-2 rounded border border-cyan-500/30 backdrop-blur pointer-events-none">
                    <p class="text-cyan-400 text-[10px] font-mono">COORDINATES: -7.2758, 112.7915</p>
                </div>
            </div>

            <div class="text-center border-t border-white/10 pt-8 mt-10">
                <p class="text-gray-600 text-xs">
                    © {{ date('Y') }} EMOSVER Team - Politeknik Elektronika Negeri Surabaya. <br class="md:hidden"> All systems operational.
                </p>
            </div>

        </div>

    </div>
</body>
</html>