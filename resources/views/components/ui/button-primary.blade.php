<a {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center rounded-lg bg-prime-gold px-5 py-3 font-bold text-prime-black transition hover:bg-prime-gold-dark'
]) }}>
    {{ $slot }}
</a>