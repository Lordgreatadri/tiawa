<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-2.5 rounded-lg text-sm font-semibold text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-violet-500/50 focus:ring-offset-2 focus:ring-offset-gray-950 active:scale-95']) }} style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
    {{ $slot }}
</button>
