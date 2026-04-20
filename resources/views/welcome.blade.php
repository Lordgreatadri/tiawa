<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tiawa — Smarter Short Links for Africa</title>
        <meta name="description" content="Shorten URLs, generate QR codes, and track your links with Africa-first analytics. Free to start, no login required.">

        <!-- Inter font (Proton-style) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Critical: prevent FOUC on dark background --}}
        <style>html,body{background:#0a0a0f;color:#fff;margin:0}</style>
    </head>
    <body class="bg-gray-950 text-white antialiased" style="font-family: 'Inter', sans-serif;">
    {{-- ═══════════════════════════════════════════════════════
         TIAWA — Landing Page  |  Phase 1: User Growth
         No login required · IP rate-limited · QR included
    ═══════════════════════════════════════════════════════ --}}

    {{-- ── NAVBAR ── --}}
    <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md" style="background:rgba(10,10,15,0.85);border-bottom:1px solid rgba(255,255,255,0.05)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <x-app-logo />

                {{-- Nav links (desktop) --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#features" class="text-sm text-gray-400 hover:text-white transition-colors">Features</a>
                    <a href="#how-it-works" class="text-sm text-gray-400 hover:text-white transition-colors">How it works</a>
                    {{-- <a href="#pricing" class="text-sm text-gray-400 hover:text-white transition-colors">Pricing</a> --}}
                </div>

                {{-- Auth --}}
                <div class="flex items-center gap-3" style="display: none;">
                    @if (Route::has('login'))
                        {{-- @auth --}}
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Dashboard</a>
                        {{-- @else --}}
                            <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-white transition-colors px-3 py-2">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-semibold px-4 py-2 rounded-lg text-white transition-colors" style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">Get Started</a>
                            @endif
                        {{-- @endauth --}}
                    @endif
                </div>
            </div>
        </div>
    </nav>

    {{-- ── HERO ── --}}
    <section class="relative pt-32 pb-20 overflow-hidden">

        {{-- Background glow blobs --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full blur-3xl" style="background:rgba(124,58,237,0.18)"></div>
            <div class="absolute -top-10 right-10 w-96 h-96 rounded-full blur-3xl" style="background:rgba(79,70,229,0.12)"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[400px] rounded-full blur-3xl" style="background:rgba(109,40,217,0.07)"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            {{-- Phase badge --}}
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold mb-8" style="background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.25);color:#a78bfa">
                <span class="w-1.5 h-1.5 rounded-full bg-violet-400 animate-pulse"></span>
                {{-- Phase 1 — Free, no login required --}}
            </div>

            {{-- Headline --}}
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-6">
                Short links with<br>
                <span style="background:linear-gradient(90deg,#a78bfa,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Africa-first</span> insights
            </h1>

            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-12 leading-relaxed">
                Shorten URLs, generate QR codes and track every click — built for businesses growing across Africa and beyond.
            </p>

            {{-- ── URL SHORTENER FORM (Alpine.js) ── --}}
            <div x-data="shortener()" class="max-w-3xl mx-auto">

                <form @submit.prevent="shorten" class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5" style="color:#9ca3af" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                            </svg>
                        </div>
                        <input
                            x-model="url"
                            type="url"
                            placeholder="Paste your long URL here..."
                            required
                            class="w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 text-base transition-colors focus:outline-none"
                            style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);font-family:'Inter',sans-serif"
                            :style="{ 'border-color': focused ? 'rgba(124,58,237,0.7)' : 'rgba(255,255,255,0.1)' }"
                            @focus="focused=true" @blur="focused=false"
                        >
                    </div>
                    <button
                        type="submit"
                        :disabled="loading"
                        class="px-8 py-4 rounded-xl text-white font-semibold text-base transition-all flex items-center justify-center gap-2 whitespace-nowrap"
                        style="background:linear-gradient(135deg,#7c3aed,#4f46e5)"
                        :style="{ opacity: loading ? '0.7' : '1', cursor: loading ? 'not-allowed' : 'pointer' }"
                    >
                        <svg x-show="loading" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                        <span x-text="loading ? 'Shortening...' : 'Shorten Link'"></span>
                    </button>
                </form>

                {{-- Error message --}}
                <div x-show="error" x-transition.opacity class="mt-4 p-4 rounded-xl text-sm text-left" style="background:rgba(239,68,68,0.08);border:1px solid rgba(239,68,68,0.2);color:#f87171">
                    <span x-text="error"></span>
                </div>

                {{-- Result card --}}
                <div x-show="result" x-transition.opacity class="mt-6 p-6 rounded-2xl text-left" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.1)">
                    <div class="flex flex-col md:flex-row gap-6 items-start">

                        {{-- Link info --}}
                        <div class="flex-1 min-w-0">
                            <p class="text-xs uppercase tracking-widest font-semibold mb-2" style="color:#9ca3af">Your Short Link</p>

                            <div class="flex items-center gap-3 flex-wrap">
                                <a :href="result?.short_url" target="_blank" rel="noopener"
                                   x-text="result?.short_url"
                                   class="text-xl font-bold hover:underline break-all transition-colors"
                                   style="color:#a78bfa"
                                ></a>
                                <button
                                    @click="copy(result?.short_url)"
                                    class="flex-shrink-0 p-2 rounded-lg transition-all"
                                    style="background:rgba(255,255,255,0.05)"
                                    :style="{ background: copied ? 'rgba(34,197,94,0.15)' : 'rgba(255,255,255,0.05)' }"
                                    title="Copy to clipboard"
                                >
                                    <svg x-show="!copied" class="w-4 h-4" style="color:#9ca3af" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                    <svg x-show="copied" class="w-4 h-4" style="color:#4ade80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="mt-4 pt-4" style="border-top:1px solid rgba(255,255,255,0.06)">
                                <p class="text-xs mb-1" style="color:#9ca3af">Original URL</p>
                                <p x-text="url" class="text-sm break-all" style="color:#9ca3af"></p>
                            </div>

                            <div class="mt-4 flex items-center gap-2 flex-wrap">
                                <span class="px-3 py-1.5 rounded-lg text-xs font-semibold" style="background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.25);color:#a78bfa">
                                    ✓ Link created
                                </span>
                                <span class="px-3 py-1.5 rounded-lg text-xs" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);color:#9ca3af">
                                    <span class="text-white font-semibold">0</span> clicks so far
                                </span>
                            </div>

                            <p class="mt-4 text-xs" style="color:#9ca3af">
                                <a href="{{ route('register') }}" class="hover:underline" style="color:#a78bfa">Create a free account</a>
                                to track analytics, manage links &amp; download QR codes.
                            </p>
                        </div>

                        {{-- QR Code --}}
                        <div x-show="result?.qr_code" class="flex flex-col items-center gap-2 flex-shrink-0">
                            <div class="p-3 rounded-xl bg-white">
                                <img :src="result?.qr_code" alt="QR Code" class="w-28 h-28">
                            </div>
                            <p class="text-xs" style="color:#9ca3af">Scan QR Code</p>
                            <a
                                :href="result?.qr_code"
                                :download="'tiawa-qr-' + (result?.short_path ?? '') + '.svg'"
                                class="text-xs hover:underline transition-colors"
                                style="color:#a78bfa"
                            >↓ Download QR</a>
                        </div>
                    </div>
                </div>

                <p class="mt-3 text-xs text-center" style="color:#9ca3af">
                    Free to use &middot; No login required &middot; 10 links per hour per IP
                </p>
            </div>
        </div>
    </section>

    {{-- ── TRUST STATS ── --}}
    <div class="py-10" style="border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05);background:rgba(255,255,255,0.015)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-extrabold text-white">10K+</div>
                    <div class="text-sm mt-1" style="color:#9ca3af">Links Shortened</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-white">50K+</div>
                    <div class="text-sm mt-1" style="color:#9ca3af">Clicks Tracked</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-white">15+</div>
                    <div class="text-sm mt-1" style="color:#9ca3af">Hits from Countries</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-white">99.9%</div>
                    <div class="text-sm mt-1" style="color:#9ca3af">Uptime</div>
                </div>
            </div>
        </div>
    </div>

    {{-- ── FEATURES ── --}}
    <section id="features" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Everything you need to grow</h2>
                <p class="text-lg max-w-2xl mx-auto" style="color:#9ca3af">
                    More than just a URL shortener. A complete link management platform built for modern African businesses.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Feature: URL Shortening --}}
                <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 transition-all" style="background:rgba(124,58,237,0.1)">
                        <svg class="w-6 h-6" style="color:#a78bfa" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Instant URL Shortening</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Convert any long URL into a clean, shareable short link in under a second. No account needed to get started.</p>
                </div>

                {{-- Feature: QR Code --}}
                <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(14,165,233,0.1)">
                        <svg class="w-6 h-6" style="color:#38bdf8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">QR Code Generation</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Every short link gets a free QR code. Perfect for flyers, posters, restaurant menus, and WhatsApp campaigns.</p>
                </div>

                {{-- Feature: Analytics --}}
                <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)" >
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(16,185,129,0.1)">
                        <svg class="w-6 h-6" style="color:#34d399" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Click Analytics</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Track every click with detailed insights — device type, browser, time of day, and geographic location.</p>
                </div>

                {{-- Feature: Africa-first --}}
                {{-- <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(245,158,11,0.1)">
                        <svg class="w-6 h-6" style="color:#fbbf24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Africa-First Insights</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">See exactly where your audience is — Ghana, Nigeria, Kenya and beyond. Tailored for the African market reach.</p>
                </div> --}}

                {{-- Feature: Developer API --}}
                {{-- <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)" >
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(236,72,153,0.1)">
                        <svg class="w-6 h-6" style="color:#f472b6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Developer API</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Integrate link shortening directly into your apps with our clean RESTful API and token-based authentication.</p>
                </div> --}}

                {{-- Feature: Micro-pricing --}}
                {{-- <div class="p-6 rounded-2xl group transition-all" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(124,58,237,0.1)">
                        <svg class="w-6 h-6" style="color:#a78bfa" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Micro-Pricing</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">No rigid subscriptions. Buy token bundles — pay only for what you use. Designed for emerging market affordability.</p>
                </div> --}}

            </div>
        </div>
    </section>

    {{-- ── HOW IT WORKS ── --}}
    <section id="how-it-works" class="py-24" style="background:rgba(255,255,255,0.015);border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">How it works</h2>
                <p class="text-lg" style="color:#9ca3af">Three simple steps to launch your campaign</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6 shadow-lg" style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
                        1
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Paste your URL</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Drop any long URL — a product page, form, social profile, or campaign landing page.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6 shadow-lg" style="background:linear-gradient(135deg,#4f46e5,#0ea5e9)">
                        2
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Get your short link + QR</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Instantly receive a compact short URL and a scannable QR code ready to share or print on any material.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6 shadow-lg" style="background:linear-gradient(135deg,#0ea5e9,#10b981)">
                        3
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Track &amp; grow</h3>
                    <p class="text-sm leading-relaxed" style="color:#9ca3af">Sign up to unlock click analytics, device insights, location data, and campaign management tools.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ── USE CASES ── --}}
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Built for real-world campaigns</h2>
                <p class="text-lg max-w-2xl mx-auto" style="color:#9ca3af">From street-side vendors to enterprise teams — Tiawa adapts to your needs.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <div class="p-5 rounded-2xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="text-3xl mb-4">🏪</div>
                    <h4 class="text-white font-semibold mb-2">Small Businesses</h4>
                    <p class="text-sm" style="color:#9ca3af">Share your menu, product catalogue, or booking page with a clean short link on WhatsApp and Instagram.</p>
                </div>

                <div class="p-5 rounded-2xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="text-3xl mb-4">⛪</div>
                    <h4 class="text-white font-semibold mb-2">Churches &amp; Events</h4>
                    <p class="text-sm" style="color:#9ca3af">Print QR codes on flyers and programmes. See how many people scanned and registered.</p>
                </div>

                <div class="p-5 rounded-2xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="text-3xl mb-4">📱</div>
                    <h4 class="text-white font-semibold mb-2">WhatsApp Campaigns</h4>
                    <p class="text-sm" style="color:#9ca3af">Replace messy long links in broadcasts with branded short URLs that are easy to remember and type.</p>
                </div>

                <div class="p-5 rounded-2xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.07)">
                    <div class="text-3xl mb-4">👩‍💻</div>
                    <h4 class="text-white font-semibold mb-2">Developers &amp; Agencies</h4>
                    <p class="text-sm" style="color:#9ca3af">Integrate link shortening and analytics into your SaaS, app, or client campaigns via our API.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ── PRICING / PHASES ── --}}
    <section id="pricing" class="py-24" style="background:rgba(255,255,255,0.015);border-top:1px solid rgba(255,255,255,0.05); display: none;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Growing with you</h2>
                <p class="text-lg max-w-2xl mx-auto" style="color:#9ca3af">
                    Tiawa is designed to scale from your first free link to full enterprise campaigns.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-12">

                {{-- Phase 1 --}}
                <div class="relative p-6 rounded-2xl overflow-hidden" style="background:rgba(255,255,255,0.025);border:1px solid rgba(124,58,237,0.4)">
                    <div class="absolute top-0 right-0 px-3 py-1 text-xs font-bold rounded-bl-xl" style="background:rgba(124,58,237,0.25);color:#a78bfa">ACTIVE NOW</div>
                    <div class="mb-6">
                        <div class="text-xs font-bold uppercase tracking-widest mb-2" style="color:#a78bfa">Phase 1 &mdash; User Growth</div>
                        <h3 class="text-2xl font-bold text-white">Free</h3>
                        <div class="mt-2 text-3xl font-extrabold text-white">$0 <span class="text-base font-normal" style="color:#9ca3af">forever</span></div>
                    </div>
                    <ul class="space-y-3 text-sm mb-6">
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> URL shortening (no login needed)</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> QR code generation &amp; download</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> Basic click count</li>
                        <li class="flex items-start gap-3" style="color:#9ca3af"><span class="mt-0.5">✗</span> Analytics dashboard</li>
                        <li class="flex items-start gap-3" style="color:#9ca3af"><span class="mt-0.5">✗</span> Link management</li>
                    </ul>
                    <a href="#" class="block text-center py-3 rounded-xl text-sm font-semibold transition-colors" style="border:1px solid rgba(124,58,237,0.4);color:#a78bfa">
                        Start free now
                    </a>
                </div>

                {{-- Phase 2 --}}
                <div class="relative p-6 rounded-2xl overflow-hidden" style="background:linear-gradient(180deg,rgba(79,46,180,0.25),rgba(30,27,75,0.25));border:1px solid rgba(124,58,237,0.3)">
                    <div class="absolute top-0 right-0 px-3 py-1 text-xs font-bold rounded-bl-xl" style="background:rgba(79,70,229,0.25);color:#818cf8">COMING SOON</div>
                    <div class="mb-6">
                        <div class="text-xs font-bold uppercase tracking-widest mb-2" style="color:#818cf8">Phase 2 &mdash; Conversion</div>
                        <h3 class="text-2xl font-bold text-white">Starter</h3>
                        <div class="mt-2 text-3xl font-extrabold text-white">$2 <span class="text-base font-normal" style="color:#9ca3af">/ 5,000 tokens</span></div>
                    </div>
                    <ul class="space-y-3 text-sm mb-6">
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> Everything in Free</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> Full analytics dashboard</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> Device &amp; location insights</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> QR code downloads (PNG &amp; SVG)</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#a78bfa" class="mt-0.5 font-bold">✓</span> Link management dashboard</li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center py-3 rounded-xl text-white text-sm font-semibold transition-all" style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
                        Join waitlist
                    </a>
                </div>

                {{-- Phase 3 --}}
                <div class="relative p-6 rounded-2xl overflow-hidden" style="background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.07)">
                    <div class="absolute top-0 right-0 px-3 py-1 text-xs font-bold rounded-bl-xl" style="background:rgba(255,255,255,0.06);color:#9ca3af">ROADMAP</div>
                    <div class="mb-6">
                        <div class="text-xs font-bold uppercase tracking-widest mb-2" style="color:#9ca3af">Phase 3 &mdash; Monetization</div>
                        <h3 class="text-2xl font-bold text-white">Growth</h3>
                        <div class="mt-2 text-3xl font-extrabold text-white">$10 <span class="text-base font-normal" style="color:#9ca3af">/ 50,000 tokens</span></div>
                    </div>
                    <ul class="space-y-3 text-sm mb-6">
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#9ca3af" class="mt-0.5 font-bold">✓</span> Everything in Starter</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#9ca3af" class="mt-0.5 font-bold">✓</span> Custom branded domains</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#9ca3af" class="mt-0.5 font-bold">✓</span> Team accounts &amp; collaboration</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#9ca3af" class="mt-0.5 font-bold">✓</span> Webhooks &amp; integrations</li>
                        <li class="flex items-start gap-3" style="color:#d1d5db"><span style="color:#9ca3af" class="mt-0.5 font-bold">✓</span> Priority support + API keys</li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center py-3 rounded-xl text-sm font-semibold transition-colors cursor-not-allowed" style="border:1px solid rgba(255,255,255,0.12);color:#9ca3af" disabled>
                        Get early access
                    </a>
                </div>

            </div>

            {{-- Token consumption table --}}
            <div class="p-6 rounded-2xl" style="background:rgba(255,255,255,0.015);border:1px solid rgba(255,255,255,0.06)">
                <h4 class="text-sm font-bold uppercase tracking-widest text-center mb-6" style="color:#9ca3af">Token Consumption Guide</h4>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="text-center p-4 rounded-xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.05)">
                        <div class="text-2xl font-extrabold text-white mb-1">1</div>
                        <div class="text-xs" style="color:#9ca3af">token per link created</div>
                    </div>
                    <div class="text-center p-4 rounded-xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.05)">
                        <div class="text-2xl font-extrabold text-white mb-1">1</div>
                        <div class="text-xs" style="color:#9ca3af">token per QR generated</div>
                    </div>
                    <div class="text-center p-4 rounded-xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.05)">
                        <div class="text-2xl font-extrabold text-white mb-1">0.1</div>
                        <div class="text-xs" style="color:#9ca3af">token per click tracked</div>
                    </div>
                    <div class="text-center p-4 rounded-xl" style="background:rgba(255,255,255,0.025);border:1px solid rgba(255,255,255,0.05)">
                        <div class="text-2xl font-extrabold text-white mb-1">0.2</div>
                        <div class="text-xs" style="color:#9ca3af">token per advanced report</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="py-24" style="border-top:1px solid rgba(255,255,255,0.05); display: none;" id="cta">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="p-12 rounded-3xl relative overflow-hidden" style="background:linear-gradient(135deg,rgba(79,46,180,0.5),rgba(30,27,75,0.5));border:1px solid rgba(124,58,237,0.25)">
                <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
                    <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full blur-3xl" style="background:rgba(124,58,237,0.12)"></div>
                    <div class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full blur-3xl" style="background:rgba(79,70,229,0.1)"></div>
                </div>
                <div class="relative">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Ready to grow smarter?</h2>
                    <p class="text-lg mb-8" style="color:#9ca3af">
                        Join thousands of businesses using Tiawa to track, optimise and grow their audience across Africa.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('register') }}" class="px-8 py-4 rounded-xl text-white font-semibold transition-all" style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">Create Free Account & Join Waitlist</a>
                        <a href="#features" class="px-8 py-4 rounded-xl font-semibold transition-colors" style="border:1px solid rgba(255,255,255,0.12);color:#d1d5db">Explore Features</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── FOOTER ── --}}
    <footer style="border-top:1px solid rgba(255,255,255,0.05)" class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <x-app-logo variant="footer" />
                    <p class="text-sm leading-relaxed max-w-xs" style="color:#9ca3af">More than shortening — insightful, trackable, and locally optimised links for the African market.</p>
                </div>
                <div>
                    <h5 class="text-sm font-semibold text-white mb-4">Product</h5>
                    <ul class="space-y-2 text-sm" style="color:#9ca3af">
                        <li><a href="#features" class="hover:text-gray-300 transition-colors">Features</a></li>
                        {{-- <li><a href="#pricing" class="hover:text-gray-300 transition-colors">Pricing</a></li> --}}
                        <li><a href="#" class="hover:text-gray-300 transition-colors">API Docs</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-sm font-semibold text-white mb-4">Account</h5>
                    <ul class="space-y-2 text-sm" style="color:#9ca3af">
                        <li><a href="{{ route('contact') }}" class="hover:text-gray-300 transition-colors">Contact Us</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-gray-300 transition-colors  cursor-not-allowed pointer-events-none" readonly>Log in</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-gray-300 transition-colors  cursor-not-allowed pointer-events-none" >Sign up</a></li>
                        
                    </ul>
                </div>
            </div>

            {{-- Contact strip --}}
            <div class="mt-8 rounded-2xl px-6 py-5 grid sm:grid-cols-3 gap-4" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06)">
                {{-- Email --}}
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background:rgba(124,58,237,0.15)">
                        <svg class="w-4 h-4" style="color:#a78bfa" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-400 mb-0.5">Email</p>
                        <a href="mailto:info@tiawa.co" class="text-sm text-white hover:text-violet-300 transition-colors">info@tiawa.co</a>
                    </div>
                </div>
                {{-- Phone --}}
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background:rgba(251,146,60,0.12)">
                        <svg class="w-4 h-4" style="color:#fb923c" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-400 mb-0.5">Phone / WhatsApp</p>
                        <a href="tel:+233000000000" class="text-sm text-white hover:text-orange-300 transition-colors">+233 000 000 000</a>
                    </div>
                </div>
                {{-- Location --}}
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background:rgba(16,185,129,0.1)">
                        <svg class="w-4 h-4" style="color:#34d399" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-400 mb-0.5">Based in</p>
                        <p class="text-sm text-white">Accra, Ghana</p> 
                        {{-- &mdash; --}}
                    </div>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4" style="border-top:1px solid rgba(255,255,255,0.05)">
                <p class="text-xs" style="color:#9ca3af">&copy; {{ date('Y') }} Tiawa.co is hosted and supported by 44 Technology.</p>
                <p class="text-xs" style="color:#9ca3af">Powered by <a href="#" rel="noopener" class="hover:text-white transition-colors" style="color:#d1d5db">44 Technology</a></p>
            </div>
        </div>
    </footer>

    {{-- ── ALPINE.JS SHORTENER COMPONENT ── --}}
    <script>
        function shortener() {
            return {
                url: '',
                loading: false,
                result: null,
                error: null,
                copied: false,
                focused: false,

                async shorten() {
                    this.loading = true;
                    this.result = null;
                    this.error = null;

                    try {
                        const response = await fetch('/api/shorten', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify({ url: this.url }),
                        });

                        const data = await response.json();

                        if (!response.ok) {
                            this.error = data.message || 'Something went wrong. Please try again.';
                        } else {
                            this.result = data;
                            // Scroll to result smoothly
                            this.$nextTick(() => {
                                document.querySelector('[x-show="result"]')?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                            });
                        }
                    } catch (e) {
                        this.error = 'Network error. Please check your connection and try again.';
                    } finally {
                        this.loading = false;
                    }
                },

                async copy(text) {
                    try {
                        await navigator.clipboard.writeText(text);
                    } catch {
                        const el = document.createElement('textarea');
                        el.value = text;
                        el.style.position = 'fixed';
                        el.style.opacity = '0';
                        document.body.appendChild(el);
                        el.select();
                        document.execCommand('copy');
                        document.body.removeChild(el);
                    }
                    this.copied = true;
                    setTimeout(() => this.copied = false, 2000);
                }
            };
        }
    </script>
  

    </body>
</html>
