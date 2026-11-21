{{--
    Inline SVG icon set.

    Replaces the Font Awesome CDN stylesheet (~102 KB decoded, blocking request)
    with a handful of inline paths that inherit currentColor. Only the icons the
    site actually uses are defined here.
--}}
@props(['name' => 'dot', 'class' => '', 'stroke' => 1.7])

@php
    // Icons are sized in `em`, exactly like Font Awesome glyphs were: the
    // surrounding `text-*` utility sets the font-size and the SVG follows it.
    // Without this an inline <svg> has no intrinsic size and fills its parent.
    // An explicit h-*/w-* class wins, so callers can still force a pixel size.
    $sized = preg_match('/(^|\s)[hw]-/', $class) ? '' : 'h-[1em] w-[1em]';

    $paths = [
        'chevron-down' => '<path d="M6 9l6 6 6-6"/>',
        'chevron-left' => '<path d="M15 18l-6-6 6-6"/>',
        'chevron-right' => '<path d="M9 18l6-6-6-6"/>',
        'arrow-right' => '<path d="M5 12h13"/><path d="M13 6l6 6-6 6"/>',
        'expand' => '<path d="M9 4H5a1 1 0 0 0-1 1v4"/><path d="M15 4h4a1 1 0 0 1 1 1v4"/><path d="M15 20h4a1 1 0 0 0 1-1v-4"/><path d="M9 20H5a1 1 0 0 1-1-1v-4"/>',
        'xmark' => '<path d="M18 6L6 18"/><path d="M6 6l12 12"/>',
        'trophy' => '<path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 4h10v5a5 5 0 0 1-10 0z"/><path d="M7 6H5a2 2 0 0 0 0 4h2"/><path d="M17 6h2a2 2 0 0 1 0 4h-2"/>',
        'medal' => '<circle cx="12" cy="10" r="5"/><path d="M8.5 14.5L7 22l5-3 5 3-1.5-7.5"/>',
        'location' => '<path d="M12 21s-7-6.2-7-11a7 7 0 1 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'envelope' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 7l8.5 6 8.5-6"/>',
        'users' => '<circle cx="9" cy="8" r="3.4"/><path d="M3 20v-1.5A4.5 4.5 0 0 1 7.5 14h3A4.5 4.5 0 0 1 15 18.5V20"/><path d="M16.5 5.5a3.4 3.4 0 0 1 0 6.6"/><path d="M18 14a4.5 4.5 0 0 1 3 4.2V20"/>',
        'lightbulb' => '<path d="M9.5 18h5"/><path d="M10 21.5h4"/><path d="M12 2a6.5 6.5 0 0 0-3.8 11.8V16h7.6v-2.2A6.5 6.5 0 0 0 12 2z"/>',
        'anchor' => '<circle cx="12" cy="5" r="2.6"/><path d="M12 7.6V21"/><path d="M5 13H3a9 9 0 0 0 18 0h-2"/><path d="M8 11h8"/>',
        'paper-plane' => '<path d="M21 3L3 10.5l7 2.8 2.8 7L21 3z"/><path d="M21 3l-9.2 9.2"/>',
        'play' => '<path d="M8 4.8v14.4L19 12z" fill="currentColor" stroke="none"/>',
        'instagram' => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/>',
        'youtube' => '<rect x="2.5" y="5.5" width="19" height="13" rx="4"/><path d="M10.5 9.6l5 2.4-5 2.4z" fill="currentColor" stroke="none"/>',
        'linkedin' => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M7.5 10.5V17"/><circle cx="7.5" cy="7.4" r="1" fill="currentColor" stroke="none"/><path d="M11.5 17v-3.6a2.4 2.4 0 0 1 4.8 0V17"/><path d="M11.5 10.6V17"/>',
        'dot' => '<circle cx="12" cy="12" r="3"/>',
    ];
    $body = $paths[$name] ?? $paths['dot'];
@endphp

<svg {{ $attributes->merge(['class' => 'inline-block shrink-0 ' . $sized . ' ' . $class]) }}
     viewBox="0 0 24 24"
     fill="none"
     stroke="currentColor"
     stroke-width="{{ $stroke }}"
     stroke-linecap="round"
     stroke-linejoin="round"
     aria-hidden="true"
     focusable="false">{!! $body !!}</svg>
