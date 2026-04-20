<x-guest-layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white">Welcome back</h1>
        <p class="mt-1 text-sm text-gray-400">Sign in to your Tiawa account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <x-input-label for="password" :value="__('Password')" class="mb-0" />
                @if (Route::has('password.request'))
                    <a class="text-xs text-violet-400 hover:text-violet-300 transition-colors" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>
            <x-text-input id="password" class="block w-full" type="password" name="password" required autocomplete="current-password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-white/10 bg-white/5 text-violet-600 focus:ring-violet-500 focus:ring-offset-gray-950" name="remember">
            <label for="remember_me" class="ml-2 text-sm text-gray-400">{{ __('Remember me') }}</label>
        </div>

        <x-primary-button class="w-full mt-2 opacity-60 cursor-not-allowed pointer-events-none" disabled>
            {{ __('Sign in') }}
        </x-primary-button>

        <p class="text-center text-sm text-gray-500">
            Don't have an account?
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-violet-400 hover:text-violet-300 font-medium transition-colors">Create one free</a>
            @endif
        </p>
    </form>
</x-guest-layout>
