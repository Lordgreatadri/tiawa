<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us — Tiawa</title>
    <meta name="description" content="Get in touch with the Tiawa team. We're here to help with questions, partnerships, or support.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>html,body{background:#0a0a0f;color:#fff;margin:0}</style>
</head>
<body class="bg-gray-950 text-white antialiased" style="font-family:'Inter',sans-serif;">

{{-- Background grid --}}
<div class="fixed inset-0 pointer-events-none" style="background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,0.04) 1px,transparent 0);background-size:32px 32px;"></div>
<div class="fixed top-0 right-1/4 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(124,58,237,0.1) 0%,transparent 70%);filter:blur(40px);"></div>
<div class="fixed bottom-0 left-1/4 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(251,146,60,0.07) 0%,transparent 70%);filter:blur(40px);"></div>

{{-- ── NAVBAR ── --}}
<nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md" style="background:rgba(10,10,15,0.85);border-bottom:1px solid rgba(255,255,255,0.05)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <x-app-logo />
            <div class="flex items-center gap-3" style="display: none;">
                {{-- @auth --}}
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Dashboard</a>
                {{-- @else --}}
                    <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-white transition-colors px-3 py-2">Log in</a>
                    <a href="{{ route('register') }}" class="text-sm font-semibold px-4 py-2 rounded-lg text-white transition-colors" style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">Get Started</a>
                {{-- @endauth --}}
            </div>
        </div>
    </div>
</nav>

<div class="relative pt-28 pb-20 px-4">
    <div class="max-w-6xl mx-auto">

        {{-- Page header --}}
        <div class="text-center mb-14">
            <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-xs font-medium mb-5" style="background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.25);color:#a78bfa">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                We'd love to hear from you
            </div>
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Get in Touch</h1>
            <p class="text-lg max-w-xl mx-auto" style="color:#9ca3af">Have a question, partnership idea, or just want to say hello? Fill in the form and we'll get back to you at your preferred time.</p>
        </div>

        <div class="grid lg:grid-cols-5 gap-10">

            {{-- ── LEFT: Contact info cards ── --}}
            <div class="lg:col-span-2 space-y-4">

                {{-- Email --}}
                <div class="flex items-start gap-4 p-5 rounded-2xl" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:rgba(124,58,237,0.15)">
                        <svg class="w-5 h-5" style="color:#a78bfa" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-500 mb-0.5 uppercase tracking-wide">Email</p>
                        <a href="mailto:info@tiawa.co" class="text-sm font-medium text-white hover:text-violet-300 transition-colors">info@tiawa.co</a>
                        <p class="text-xs text-gray-400 mt-1">We reply within 24 hours</p>
                    </div>
                </div>

                {{-- Phone / WhatsApp --}}
                <div class="flex items-start gap-4 p-5 rounded-2xl" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:rgba(251,146,60,0.12)">
                        <svg class="w-5 h-5" style="color:#fb923c" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-500 mb-0.5 uppercase tracking-wide">Phone / WhatsApp</p>
                        <a href="tel:+233000000000" class="text-sm font-medium text-white hover:text-orange-300 transition-colors">+233 000 000 000</a>
                        <p class="text-xs text-gray-400 mt-1">Mon – Fri, 9 am – 6 pm GMT</p>
                    </div>
                </div>

                {{-- Location --}}
                <div class="flex items-start gap-4 p-5 rounded-2xl" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:rgba(16,185,129,0.1)">
                        <svg class="w-5 h-5" style="color:#34d399" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-500 mb-0.5 uppercase tracking-wide">Based in</p>
                        <p class="text-sm font-medium text-white">Accra, Ghana</p>
                        <p class="text-xs text-gray-400 mt-1">Serving all of Africa &amp; beyond</p>
                    </div>
                </div>

                {{-- Business hours --}}
                <div class="flex items-start gap-4 p-5 rounded-2xl" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07)">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:rgba(14,165,233,0.1)">
                        <svg class="w-5 h-5" style="color:#38bdf8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-gray-500 mb-0.5 uppercase tracking-wide">Business Hours</p>
                        <p class="text-sm font-medium text-white">Mon – Fri: 9:00 – 18:00</p>
                        <p class="text-xs text-gray-400 mt-1">Greenwich Mean Time (GMT, UTC+0)</p>
                    </div>
                </div>
            </div>

            {{-- ── RIGHT: Contact form ── --}}
            <div class="lg:col-span-3">
                <div class="rounded-2xl p-8" style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07)">

                    @if (session('success'))
                        <div class="mb-6 flex items-start gap-3 rounded-xl px-4 py-3 text-sm" style="background:rgba(16,185,129,0.1);border:1px solid rgba(16,185,129,0.2);color:#34d399">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}" class="space-y-5">
                        @csrf

                        {{-- Name + Subject row --}}
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-1.5">Full Name <span style="color:#fb923c">*</span></label>
                                <input id="name" name="name" type="text" required value="{{ old('name') }}"
                                    placeholder="Jane Doe"
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none transition-colors"
                                    style="background:rgba(255,255,255,0.05);border:1px solid {{ $errors->has('name') ? '#f87171' : 'rgba(255,255,255,0.1)' }}">
                                @error('name')<p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-300 mb-1.5">Subject <span style="color:#fb923c">*</span></label>
                                <select id="subject" name="subject" required
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none transition-colors appearance-none"
                                    style="background:rgba(255,255,255,0.05);border:1px solid {{ $errors->has('subject') ? '#f87171' : 'rgba(255,255,255,0.1)' }}">
                                    <option value="" disabled {{ old('subject') ? '' : 'selected' }} style="background:#1a1a2e">Select a topic…</option>
                                    @foreach(['General Enquiry','Technical Support','Partnership / Integration','Billing & Plans','Feature Request','Other'] as $opt)
                                        <option value="{{ $opt }}" {{ old('subject') === $opt ? 'selected' : '' }} style="background:#1a1a2e">{{ $opt }}</option>
                                    @endforeach
                                </select>
                                @error('subject')<p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Email + Phone row --}}
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1.5">Email Address <span style="color:#fb923c">*</span></label>
                                <input id="email" name="email" type="email" required value="{{ old('email') }}"
                                    placeholder="you@example.com"
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none transition-colors"
                                    style="background:rgba(255,255,255,0.05);border:1px solid {{ $errors->has('email') ? '#f87171' : 'rgba(255,255,255,0.1)' }}">
                                @error('email')<p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1.5">Phone / WhatsApp <span class="text-gray-600 font-normal"></span></label>
                                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}"
                                    placeholder="+233 700 000 000"
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none transition-colors"
                                    style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1)">
                            </div>
                        </div>

                        {{-- Preferred contact time --}}
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="preferred_contact" class="block text-sm font-medium text-gray-300 mb-1.5">Preferred Contact Method</label>
                                <select id="preferred_contact" name="preferred_contact"
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none transition-colors appearance-none"
                                    style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1)">
                                    @foreach(['Email','WhatsApp','Phone Call','Either'] as $method)
                                        <option value="{{ $method }}" {{ old('preferred_contact') === $method ? 'selected' : '' }} style="background:#1a1a2e">{{ $method }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="preferred_time" class="block text-sm font-medium text-gray-300 mb-1.5">Best Time to Reach You</label>
                                <select id="preferred_time" name="preferred_time"
                                    class="w-full rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none transition-colors appearance-none"
                                    style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1)">
                                    @foreach(['Anytime','Morning (9am – 12pm EAT)','Afternoon (12pm – 3pm EAT)','Evening (3pm – 6pm EAT)','Weekends only'] as $time)
                                        <option value="{{ $time }}" {{ old('preferred_time') === $time ? 'selected' : '' }} style="background:#1a1a2e">{{ $time }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-1.5">Message <span style="color:#fb923c">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Tell us how we can help you…"
                                class="w-full rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none transition-colors resize-none"
                                style="background:rgba(255,255,255,0.05);border:1px solid {{ $errors->has('message') ? '#f87171' : 'rgba(255,255,255,0.1)' }}">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>@enderror
                        </div>

                        {{-- Submit --}}
                        <div class="flex items-center justify-between pt-2">
                            <p class="text-xs text-gray-400">Fields marked <span style="color:#fb923c">*</span> are required</p>
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-7 py-3 rounded-xl text-sm font-semibold text-white transition-all duration-200 hover:opacity-90 active:scale-95"
                                style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ── FOOTER ── --}}
<footer style="border-top:1px solid rgba(255,255,255,0.05)" class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <x-app-logo variant="footer" />
            <p class="text-xs" style="color:#9ca3af">&copy; {{ date('Y') }} Tiawa.co is hosted and supported by 44 Technology.</p>
            <a href="/" class="text-xs text-gray-400 hover:text-white transition-colors">&larr; Back to home</a>
        </div>
    </div>
</footer>

</body>
</html>
