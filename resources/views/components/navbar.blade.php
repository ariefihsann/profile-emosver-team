{{--
    Site header.

    Mirrors the reference layout: navigation left, wordmark centred, contact
    right, hairline rule underneath. The full-screen loader was removed — it
    delayed first paint on every navigation.
--}}
@php
    $links = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About Team'],
        ['route' => 'gallery', 'label' => 'Gallery'],
    ];
@endphp

<header x-data="{ open: false }" class="fixed inset-x-0 top-0 z-50">
    <div class="border-b border-lagoon-200/20 bg-abyss-950/70 backdrop-blur-md">
        <div class="mx-auto flex h-16 max-w-[1400px] items-center gap-6 px-5 sm:px-8">
            <nav class="hidden flex-1 items-center gap-7 md:flex" aria-label="Navigasi utama">
                @foreach ($links as $item)
                    <a href="{{ route($item['route']) }}"
                       @class([
                           'text-[13px] tracking-wide transition-colors',
                           'text-lagoon-200' => Route::is($item['route']),
                           'text-slate-300/80 hover:text-white' => ! Route::is($item['route']),
                       ])
                       @if (Route::is($item['route'])) aria-current="page" @endif>
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <a href="{{ route('home') }}"
               class="flex items-center gap-2.5 md:absolute md:left-1/2 md:-translate-x-1/2"
               aria-label="EMOSVER, kembali ke beranda">
                <span class="grid h-8 w-8 place-items-center overflow-hidden rounded-full bg-white/95 p-1">
                    <img src="{{ asset('img/logo.jpg') }}" alt="" width="32" height="32"
                         class="h-full w-full scale-[1.9] object-cover" decoding="async">
                </span>
                <span class="font-tech text-[15px] font-medium tracking-[0.2em] text-white">EMOSVER</span>
            </a>

            <div class="ml-auto flex flex-1 items-center justify-end gap-5">
                <a href="{{ route('tech') }}"
                   @class([
                       'hidden text-[13px] tracking-wide transition-colors sm:block',
                       'text-lagoon-200' => Route::is('tech'),
                       'text-slate-300/80 hover:text-white' => ! Route::is('tech'),
                   ])>
                    Contact
                </a>

                <button type="button"
                        x-on:click="open = ! open"
                        :aria-expanded="open ? 'true' : 'false'"
                        aria-controls="mobile-nav"
                        aria-label="Buka menu"
                        class="grid h-9 w-9 place-items-center rounded-full border border-white/15 text-slate-200 transition hover:border-lagoon-300/60 hover:text-white md:hidden">
                    <x-icon name="chevron-down" class="h-4 w-4" x-bind:class="open ? 'rotate-180' : ''" />
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-nav" x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="border-b border-lagoon-200/20 bg-abyss-950/95 backdrop-blur-xl md:hidden">
        <nav class="mx-auto flex max-w-[1400px] flex-col px-5 py-3" aria-label="Navigasi seluler">
            @foreach (array_merge($links, [['route' => 'tech', 'label' => 'Contact']]) as $item)
                <a href="{{ route($item['route']) }}"
                   class="border-b border-white/5 py-3 text-sm tracking-wide last:border-0 {{ Route::is($item['route']) ? 'text-lagoon-200' : 'text-slate-300' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
