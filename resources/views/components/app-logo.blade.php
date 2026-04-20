{{--
    Tiawa App Logo — reusable across all pages.

    Usage:
        <x-app-logo />                   → navbar  (horizontal link, text-xl)
        <x-app-logo variant="footer" />  → footer  (horizontal div, text-lg, mb-4)
        <x-app-logo variant="auth" />    → auth    (vertical link, domain + tagline)

    Icon: two-tone chain link 🔗
        • Bottom-left hook → orange  (#fb923c) = African energy
        • Top-right hook   → white               = tech / connection
--}}
@props(['variant' => 'nav'])

@if ($variant === 'auth')

    {{-- ── AUTH: vertical, centred, with domain + tagline ── --}}
    <a href="/" class="flex flex-col items-center gap-1 mb-8 group">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center shadow-lg"
                 style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="#fb923c"
                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="white"
                          d="M10.172 13.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-white tracking-tight leading-none">Tiawa</span>
                <span class="text-xs font-mono" style="color:#fb923c;letter-spacing:0.05em">tiawa.af</span>
            </div>
        </div>
        <span class="text-xs text-gray-500 tracking-widest uppercase font-medium mt-1">Smart URL Shortener &bull; Africa</span>
    </a>

@elseif ($variant === 'footer')

    {{-- ── FOOTER: horizontal, div wrapper ── --}}
    <div class="flex items-center gap-2 mb-4">
        <div class="w-8 h-8 rounded-lg flex items-center justify-center"
             style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="#fb923c"
                      d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="white"
                      d="M10.172 13.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
            </svg>
        </div>
        <span class="text-lg font-bold text-white">Tiawa</span>
    </div>

@else

    {{-- ── NAV (default): horizontal, anchor link ── --}}
    <a href="/" class="flex items-center gap-2 group">
        <div class="w-8 h-8 rounded-lg flex items-center justify-center"
             style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="#fb923c"
                      d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="white"
                      d="M10.172 13.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
            </svg>
        </div>
        <span class="text-xl font-bold text-white tracking-tight">Tiawa</span>
    </a>

@endif
