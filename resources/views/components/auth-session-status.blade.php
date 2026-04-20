@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-lg px-4 py-3 text-sm font-medium text-emerald-400 bg-emerald-400/10 border border-emerald-400/20']) }}>
        {{ $status }}
    </div>
@endif
