<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Tiawa') }}</title>

        <!-- Inter font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Prevent FOUC --}}
        <style>html,body{background:#0a0a0f;color:#fff;margin:0}</style>
    </head>
    <body class="antialiased bg-gray-950 text-white" style="font-family:'Inter',sans-serif;">

        {{-- Background grid pattern --}}
        <div class="fixed inset-0 pointer-events-none" style="background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,0.04) 1px,transparent 0);background-size:32px 32px;"></div>
        {{-- Purple glow top-left --}}
        <div class="fixed top-0 left-1/4 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(124,58,237,0.12) 0%,transparent 70%);filter:blur(40px);"></div>

        <div class="relative min-h-screen flex flex-col items-center justify-center px-4 py-12">

            {{-- Logo --}}
            <x-app-logo variant="auth" />

            {{-- Card --}}
            <div class="w-full max-w-md rounded-2xl p-8" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);backdrop-filter:blur(12px);">
                {{ $slot }}
            </div>

            {{-- Back to home --}}
            <p class="mt-6 text-sm text-gray-500">
                <a href="/" class="hover:text-gray-300 transition-colors">&larr; Back to home</a>
            </p>

        </div>
    </body>
</html>
