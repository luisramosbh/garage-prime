@props([
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-5 py-3 text-base',
        'lg' => 'px-6 py-4 text-lg',
    ];
@endphp

<a {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center rounded-lg bg-prime-gold font-bold text-prime-black transition hover:bg-prime-gold-dark focus:outline-none focus:ring-2 focus:ring-prime-gold focus:ring-offset-2 focus:ring-offset-prime-black ' . $sizes[$size]
]) }}>
    {{ $slot }}
</a>