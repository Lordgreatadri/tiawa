<x-guest-layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white">Reset your password</h1>
        <p class="mt-1 text-sm text-gray-400">Enter your email and we'll send you a reset link.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <x-primary-button class="w-full">
            {{ __('Send reset link') }}
        </x-primary-button>

        <p class="text-center text-sm text-gray-500">
            <a href="{{ route('login') }}" class="text-violet-400 hover:text-violet-300 transition-colors">&larr; Back to sign in</a>
        </p>
    </form>
</x-guest-layout>
