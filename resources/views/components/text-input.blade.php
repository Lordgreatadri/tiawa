@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-500 bg-white/5 border border-white/10 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 focus:outline-none transition-colors disabled:opacity-50 disabled:cursor-not-allowed']) !!}>
