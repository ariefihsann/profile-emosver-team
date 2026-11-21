<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="EMOSVER PENS - Tim Robotika Bawah Air (AUV) dari Politeknik Elektronika Negeri Surabaya. Inovasi maritim masa depan Indonesia.">
    <meta name="keywords" content="EMOSVER, PENS, KRBAI, Robot Bawah Air, AUV Indonesia, Surabaya Robotics">
    <meta name="author" content="EMOSVER Team">
    <link rel="canonical" href="https://krbai.pens.ac.id/">

    <meta property="og:title" content="EMOSVER - PENS Underwater Robotics">
    <meta property="og:description" content="Eksplorasi teknologi maritim bersama tim AUV terbaik dari PENS.">
    <meta property="og:image" content="{{ asset('img/teamm.webp') }}">
    <meta property="og:url" content="https://krbai.pens.ac.id">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <title>EMOSVER - PENS Underwater Robotics</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen overflow-x-hidden bg-abyss-950">
    @include('components.navbar')

    {{-- ============================================================
         HERO — hairline grid: headline on top, three instrument
         columns underneath (telemetry | AUV | sonar), then a band
         with team proof, statement and partner.
         ============================================================ --}}
    <section class="relative isolate overflow-hidden" aria-labelledby="hero-title">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-[linear-gradient(180deg,#0b4a5c_0%,#08303f_26%,#051d2b_56%,#030c14_100%)]"></div>
            <div class="caustics absolute inset-x-0 top-0 h-[72%] opacity-70 mix-blend-screen"></div>
            <div class="absolute inset-x-0 top-0 h-[60%] opacity-40
                        [background:repeating-linear-gradient(101deg,transparent_0_58px,rgba(165,243,252,0.055)_58px_62px,transparent_62px_150px)]
                        [mask-image:linear-gradient(180deg,black,transparent)]"></div>
        </div>

        <div class="mx-auto w-full max-w-[1400px] px-5 pt-16 sm:px-8">
            <div class="border-x border-lagoon-200/10">
                {{-- Headline --}}
                <div class="border-b border-lagoon-200/10 px-4 pb-10 pt-14 text-center sm:pb-14 sm:pt-20">
                    <p class="label-xs mb-6 text-lagoon-200/90">PENS AUV Team · Politeknik Elektronika Negeri Surabaya</p>
                    <h1 id="hero-title" class="mx-auto max-w-3xl text-[2.6rem] font-light leading-[1.06] tracking-[-0.02em] text-white sm:text-6xl lg:text-[4.4rem]">
                        We Are The<br>
                        <span class="text-lagoon-200">Ocean Explorers</span>
                    </h1>
                    <p class="mx-auto mt-7 max-w-xl text-sm leading-relaxed text-slate-300/85 sm:text-base">
                        Menggabungkan ketangguhan mekanik dan kecerdasan buatan untuk menaklukkan tantangan bawah air.
                        Kami adalah <strong class="font-semibold text-white">EMOSVER</strong>.
                    </p>
                </div>

                {{-- Instrument row --}}
                <div class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_minmax(0,1.3fr)_minmax(0,1fr)]">
                    {{-- Telemetry --}}
                    <div class="order-2 border-b border-lagoon-200/10 p-4 md:order-1 md:border-b-0 md:border-r">
                        <div class="panel h-full rounded-xl p-5">
                            <p class="label-xs text-slate-400">Achievement Telemetry</p>
                            <p class="mt-2 text-sm text-slate-200">Konsistensi capaian nasional</p>

                            <div class="relative mt-6">
                                <span class="absolute -top-3 left-[46%] rounded-full bg-white px-2 py-0.5 text-[10px] font-semibold text-abyss-900">+9 capaian</span>
                                <svg viewBox="0 0 240 96" class="h-24 w-full" role="img"
                                     aria-label="Grafik capaian kompetisi 2023 hingga 2024">
                                    <defs>
                                        <linearGradient id="telemetryFill" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#38d6e8" stop-opacity="0.45"/>
                                            <stop offset="100%" stop-color="#38d6e8" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M4 78 L44 62 L84 70 L124 40 L164 52 L204 26 L236 20 L236 96 L4 96 Z"
                                          fill="url(#telemetryFill)"/>
                                    <path d="M4 78 L44 62 L84 70 L124 40 L164 52 L204 26 L236 20"
                                          fill="none" stroke="#67e8f9" stroke-width="2" stroke-linecap="round"/>
                                    <circle cx="236" cy="20" r="3.5" fill="#a5f3fc"/>
                                </svg>
                                <div class="mt-2 flex justify-between text-[10px] uppercase tracking-[0.2em] text-slate-500">
                                    <span>2023</span><span>2024</span>
                                </div>
                            </div>

                            <dl class="mt-5 grid grid-cols-2 gap-3 border-t border-lagoon-200/10 pt-4">
                                <div>
                                    <dt class="label-xs text-slate-500">National</dt>
                                    <dd class="mt-1 text-base font-light text-white">2× Top 3</dd>
                                </div>
                                <div>
                                    <dt class="label-xs text-slate-500">Regional</dt>
                                    <dd class="mt-1 text-base font-light text-white">2× Podium</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    {{-- AUV centrepiece --}}
                    <div class="relative order-1 flex flex-col items-center justify-center px-4 py-10 md:order-2 md:py-14">
                        <div class="relative grid h-60 w-full place-items-center sm:h-64">
                            <div class="absolute h-56 w-56 rounded-full border border-lagoon-200/15"></div>
                            <div class="absolute h-40 w-40 rounded-full border border-lagoon-200/20"></div>
                            <div class="absolute h-24 w-24 rounded-full border border-lagoon-200/25"></div>

                            <svg viewBox="0 0 200 120" class="rise relative h-36 w-auto" role="img"
                                 aria-label="Siluet robot bawah air EMOSVER">
                                <defs>
                                    <linearGradient id="hull" x1="0" y1="0" x2="1" y2="1">
                                        <stop offset="0%" stop-color="#f2fbfd"/>
                                        <stop offset="60%" stop-color="#a5f3fc"/>
                                        <stop offset="100%" stop-color="#38d6e8"/>
                                    </linearGradient>
                                    <filter id="hullGlow" x="-60%" y="-60%" width="220%" height="220%">
                                        <feGaussianBlur stdDeviation="5" result="b"/>
                                        <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                                    </filter>
                                </defs>
                                <g filter="url(#hullGlow)">
                                    <ellipse cx="100" cy="62" rx="56" ry="25" fill="url(#hull)" opacity="0.94"/>
                                    <circle cx="64" cy="62" r="9" fill="#030c14" opacity="0.5"/>
                                    <path d="M100 37 L100 21 L117 21 L123 37 Z" fill="url(#hull)" opacity="0.85"/>
                                    <path d="M100 87 L100 101 L83 101 L77 87 Z" fill="url(#hull)" opacity="0.7"/>
                                    <rect x="148" y="52" width="26" height="8" rx="4" fill="#a5f3fc"/>
                                    <rect x="148" y="66" width="26" height="8" rx="4" fill="#a5f3fc" opacity="0.7"/>
                                    <circle cx="36" cy="62" r="5" fill="#67e8f9"/>
                                </g>
                            </svg>

                            <span class="absolute left-0 top-1/2 -translate-y-1/2 text-[10px] uppercase tracking-[0.26em] text-slate-300/75">Surfaced</span>
                            <span class="absolute right-0 top-1/2 -translate-y-1/2 text-[10px] uppercase tracking-[0.26em] text-slate-300/75">Submerged</span>
                        </div>

                        <a href="{{ route('about') }}"
                           class="group mt-6 inline-flex items-center gap-2.5 rounded-full bg-lagoon-300 px-7 py-3 text-[11px] font-semibold uppercase tracking-[0.22em] text-abyss-900 transition hover:bg-lagoon-200">
                            Meet the team
                            <x-icon name="arrow-right" class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" />
                        </a>
                        <p class="mt-4 text-center text-[11px] text-slate-400">Enam spesialis, dua pembimbing, satu visi.</p>
                    </div>

                    {{-- Sonar card --}}
                    <div class="order-3 border-t border-lagoon-200/10 p-4 md:border-t-0 md:border-l">
                        <div class="panel overflow-hidden rounded-xl">
                            <div class="p-5 pb-4">
                                <p class="label-xs text-slate-400">Autonomous Mission</p>
                                <p class="mt-2 text-sm text-slate-200">Sonar &amp; vision scanning</p>
                            </div>
                            <a href="{{ route('gallery') }}" class="group relative block" aria-label="Buka galeri aftermovie KRBAI 2024">
                                <img src="{{ asset('img/aftermovie-poster.webp') }}"
                                     alt="Poster aftermovie KRBAI 2024" width="1280" height="720"
                                     loading="lazy" decoding="async"
                                     class="aspect-[16/10] w-full object-cover opacity-80 transition group-hover:opacity-100">
                                <span class="absolute inset-0 grid place-items-center">
                                    <span class="grid h-12 w-12 place-items-center rounded-full bg-lagoon-300/90 text-abyss-900 transition group-hover:scale-105">
                                        <x-icon name="play" class="h-4 w-4 translate-x-[1px]" />
                                    </span>
                                </span>
                                <span class="pointer-events-none absolute left-3 top-3 h-4 w-4 border-l border-t border-white/70"></span>
                                <span class="pointer-events-none absolute right-3 top-3 h-4 w-4 border-r border-t border-white/70"></span>
                                <span class="pointer-events-none absolute bottom-3 left-3 h-4 w-4 border-b border-l border-white/70"></span>
                                <span class="pointer-events-none absolute bottom-3 right-3 h-4 w-4 border-b border-r border-white/70"></span>
                            </a>
                            <div class="flex items-center justify-between gap-2 border-t border-lagoon-200/10 px-5 py-3">
                                <span class="text-[11px] text-slate-400">Aftermovie · KRBAI 2024</span>
                                <a href="https://youtu.be/UfjpnlcB18k" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-1 text-[11px] text-lagoon-200 transition hover:text-white">
                                    YouTube <x-icon name="arrow-right" class="h-3 w-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bottom band --}}
                <div class="grid grid-cols-1 border-t border-lagoon-200/10 md:grid-cols-3">
                    <div class="border-b border-lagoon-200/10 p-6 md:border-b-0 md:border-r">
                        <div class="flex -space-x-3">
                            @foreach (['ryan', 'zahra', 'rifqi'] as $member)
                                <img src="{{ asset("img/team/{$member}.webp") }}" alt=""
                                     width="700" height="525" loading="lazy" decoding="async"
                                     class="h-10 w-10 rounded-full border border-abyss-900 object-cover object-top">
                            @endforeach
                        </div>
                        <p class="mt-3 text-[11px] leading-relaxed text-slate-400">Enam anggota inti<br>dan dua pembimbing</p>
                    </div>

                    <div class="border-b border-lagoon-200/10 px-6 py-10 text-center md:border-b-0 md:border-r">
                        <p class="label-xs text-slate-400">Tentang Kami</p>
                        <p class="mx-auto mt-4 max-w-sm text-lg font-light leading-snug text-white sm:text-xl">
                            Kendaraan bawah air otonom untuk eksplorasi maritim Indonesia
                        </p>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-[11px] leading-relaxed text-slate-400">Didukung oleh<br>mitra industri kami</p>
                        <img src="{{ asset('img/fugro.webp') }}" alt="Fugro, official partner EMOSVER"
                             width="600" height="336" loading="lazy" decoding="async"
                             class="mx-auto mt-3 h-8 w-auto opacity-80">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         ACHIEVEMENTS
         ============================================================ --}}
    <section class="mx-auto w-full max-w-[1400px] px-5 py-20 sm:px-8 sm:py-24" aria-labelledby="achievements-title">
        <div class="flex flex-col gap-4 border-b border-lagoon-200/10 pb-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="label-xs text-lagoon-200/90">Hall of Fame</p>
                <h2 id="achievements-title" class="mt-3 text-3xl font-light tracking-tight text-white sm:text-4xl">Achievements</h2>
            </div>
            <p class="text-sm text-slate-400">Consistent performance in national level</p>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @php
                $achievements = [
                    ['year' => '2024', 'place' => '3rd Place', 'event' => 'KRBAI Nasional', 'scope' => 'National'],
                    ['year' => '2024', 'place' => '3rd Place', 'event' => 'KRBAI Wilayah II', 'scope' => 'Regional'],
                    ['year' => '2023', 'place' => '3rd Place', 'event' => 'KRBAI Nasional', 'scope' => 'National'],
                    ['year' => '2023', 'place' => '2nd Place', 'event' => 'KRBAI Wilayah II', 'scope' => 'Regional'],
                ];
            @endphp

            @foreach ($achievements as $item)
                @php $isNational = $item['scope'] === 'National'; @endphp
                <article class="panel group relative overflow-hidden rounded-xl p-6 transition hover:border-lagoon-300/40">
                    <div class="flex items-center justify-between">
                        <span class="font-tech text-2xl font-medium {{ $isNational ? 'text-lagoon-200' : 'text-white' }}">{{ $item['year'] }}</span>
                        <span @class([
                            'rounded border px-2 py-0.5 text-[10px] uppercase tracking-[0.18em]',
                            'border-lagoon-300/40 bg-lagoon-400/10 text-lagoon-200' => $isNational,
                            'border-white/15 bg-white/5 text-slate-300' => ! $isNational,
                        ])>{{ $item['scope'] }}</span>
                    </div>

                    <div class="pointer-events-none absolute -bottom-4 -right-4 opacity-[0.07] transition group-hover:opacity-[0.12]">
                        <x-icon :name="$isNational ? 'trophy' : 'medal'" class="h-24 w-24" :stroke="1" />
                    </div>

                    <h3 class="mt-6 text-xl font-normal text-white">{{ $item['place'] }}</h3>
                    <p class="mt-1 text-[11px] uppercase tracking-[0.2em] text-slate-400">{{ $item['event'] }}</p>
                    <div class="mt-5 h-px w-10 {{ $isNational ? 'bg-lagoon-300' : 'bg-white/25' }}"></div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- ============================================================
         NEWS
         ============================================================ --}}
    <section class="border-y border-lagoon-200/10 bg-abyss-900/40" aria-labelledby="news-title">
        <div class="mx-auto w-full max-w-[1400px] px-5 py-20 sm:px-8 sm:py-24">
            <p class="label-xs text-lagoon-200/90">Featured</p>
            <h2 id="news-title" class="mt-3 text-3xl font-light tracking-tight text-white sm:text-4xl">In The News</h2>

            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-3">
                @php
                    $news = [
                        [
                            'img' => 'news.webp', 'w' => 900, 'h' => 562,
                            'alt' => 'Berita prestasi tim robot PENS',
                            'source' => 'PENS.AC.ID', 'date' => 'Juli 2024',
                            'title' => 'Buktikan Diri sebagai Kampus Tradisi Juara, Tim Robot PENS Sukses Bawa Pulang Sembilan Capaian Kejuaraan',
                            'url' => 'https://www.pens.ac.id/tag/krinasional2024/',
                        ],
                        [
                            'img' => 'news1.webp', 'w' => 900, 'h' => 600,
                            'alt' => 'Berita EMOSVER pada kompetisi robotika',
                            'source' => 'ANTARA JATENG', 'date' => 'Juni 2023',
                            'title' => 'PENS juara umum KRI 2023 di USM, inilah daftar pemenangnya',
                            'url' => 'https://www.pens.ac.id/2023/06/15/pens-juara-umum-kri-2023-di-usm-inilah-daftar-pemenangnya/',
                        ],
                        [
                            'img' => 'news2.webp', 'w' => 1080, 'h' => 675,
                            'alt' => 'Running test robot PENS',
                            'source' => 'PENS NEWS', 'date' => 'Mei 2024',
                            'title' => 'Running Test Usai Diselenggarakan, Tim Robot PENS Optimis Taklukkan KRI Nasional 2024',
                            'url' => 'https://www.pens.ac.id/2024/05/28/running-test-usai-diselenggarakan-tim-robot-pens-optimis-taklukkan-kri-nasional-2024/',
                        ],
                    ];
                @endphp

                @foreach ($news as $item)
                    <article class="group">
                        <div class="relative overflow-hidden rounded-lg border border-lagoon-200/10">
                            <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['alt'] }}"
                                 width="{{ $item['w'] }}" height="{{ $item['h'] }}"
                                 loading="lazy" decoding="async"
                                 class="h-52 w-full object-cover transition duration-700 group-hover:scale-[1.04]">
                            <span class="absolute left-3 top-3 rounded-sm bg-abyss-950/80 px-2 py-1 text-[10px] uppercase tracking-[0.18em] text-lagoon-200 backdrop-blur-sm">
                                {{ $item['source'] }}
                            </span>
                        </div>
                        <p class="mt-4 text-[10px] uppercase tracking-[0.24em] text-slate-500">{{ $item['date'] }}</p>
                        <h3 class="mt-2 text-base font-normal leading-snug text-slate-100 transition group-hover:text-lagoon-200">
                            {{ $item['title'] }}
                        </h3>
                        <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="mt-3 inline-flex items-center gap-1.5 text-xs text-slate-400 transition hover:text-lagoon-200">
                            Read article <x-icon name="arrow-right" class="h-3 w-3" />
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         PARTNERSHIP
         ============================================================ --}}
    <section class="mx-auto w-full max-w-[1400px] px-5 py-16 sm:px-8" aria-labelledby="partner-title">
        <div class="panel relative overflow-hidden rounded-2xl">
            <div class="caustics pointer-events-none absolute inset-0 opacity-40"></div>
            <div class="relative grid grid-cols-1 items-center gap-8 p-8 sm:p-12 md:grid-cols-[1.2fr_1fr]">
                <div>
                    <p class="label-xs text-lagoon-200/90">Support Us</p>
                    <h2 id="partner-title" class="mt-3 text-2xl font-light text-white sm:text-3xl">Open Partnership</h2>
                    <p class="mt-3 max-w-md text-sm leading-relaxed text-slate-400">
                        Kami membuka kolaborasi riset, sponsorship, dan pengadaan teknologi untuk pengembangan robot bawah air.
                    </p>
                    <a href="https://linktr.ee/emosver.pens" target="_blank" rel="noopener noreferrer"
                       class="mt-6 inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-2.5 text-[11px] font-semibold uppercase tracking-[0.2em] text-white transition hover:border-lagoon-300 hover:text-lagoon-200">
                        Become a sponsor
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row sm:gap-8">
                    <img src="{{ asset('img/fugro.webp') }}" alt="Fugro, official partner EMOSVER"
                         width="600" height="336" loading="lazy" decoding="async"
                         class="h-10 w-auto opacity-85">
                    <span class="text-[10px] uppercase tracking-[0.28em] text-slate-500">Official partner</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         FOOTER
         ============================================================ --}}
    <footer class="border-t border-lagoon-200/10 bg-abyss-950">
        <div class="mx-auto w-full max-w-[1400px] px-5 py-14 sm:px-8">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-4">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3">
                        <span class="grid h-9 w-9 place-items-center overflow-hidden rounded-full bg-white/95 p-1">
                            <img src="{{ asset('img/logo.jpg') }}" alt="" width="32" height="32"
                                 class="h-full w-full scale-[1.9] object-cover" loading="lazy" decoding="async">
                        </span>
                        <span class="font-tech text-lg tracking-[0.18em] text-white">EMOSVER</span>
                    </div>
                    <p class="mt-5 max-w-sm text-sm leading-relaxed text-slate-400">
                        Divisi Robot Bawah Air (AUV) — Politeknik Elektronika Negeri Surabaya.<br>
                        Berinovasi untuk masa depan maritim Indonesia.
                    </p>
                </div>

                <div>
                    <h3 class="label-xs text-white">Contact</h3>
                    <ul class="mt-4 space-y-3 text-sm text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <x-icon name="location" class="mt-0.5 h-4 w-4 text-lagoon-300" />
                            <span>Gedung Robotika PENS Lt. 2,<br>Surabaya, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <x-icon name="envelope" class="h-4 w-4 text-lagoon-300" />
                            <a href="mailto:krbai@event.pens.ac.id" class="transition hover:text-lagoon-200">krbai@event.pens.ac.id</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="label-xs text-white">Follow Us</h3>
                    <div class="mt-4 flex gap-3">
                        <a href="https://instagram.com/emosver.team" target="_blank" rel="noopener noreferrer"
                           aria-label="Instagram EMOSVER"
                           class="grid h-9 w-9 place-items-center rounded-full border border-white/12 text-slate-400 transition hover:border-lagoon-300 hover:text-lagoon-200">
                            <x-icon name="instagram" class="h-4 w-4" />
                        </a>
                        <a href="https://www.youtube.com/@emosver" target="_blank" rel="noopener noreferrer"
                           aria-label="YouTube EMOSVER"
                           class="grid h-9 w-9 place-items-center rounded-full border border-white/12 text-slate-400 transition hover:border-lagoon-300 hover:text-lagoon-200">
                            <x-icon name="youtube" class="h-4 w-4" />
                        </a>
                        <a href="https://linkedin.com/company/emosver" target="_blank" rel="noopener noreferrer"
                           aria-label="LinkedIn EMOSVER"
                           class="grid h-9 w-9 place-items-center rounded-full border border-white/12 text-slate-400 transition hover:border-lagoon-300 hover:text-lagoon-200">
                            <x-icon name="linkedin" class="h-4 w-4" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 flex flex-col items-start justify-between gap-2 border-t border-lagoon-200/10 pt-6 text-[10px] uppercase tracking-[0.2em] text-slate-600 sm:flex-row sm:items-center">
                <span>&copy; {{ date('Y') }} EMOSVER Team PENS. All rights reserved.</span>
                <span>Surabaya, Indonesia</span>
            </div>
        </div>
    </footer>
</body>
</html>
