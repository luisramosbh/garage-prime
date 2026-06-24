<a {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center rounded-lg border border-prime-gold px-5 py-3 font-bold text-prime-white transition hover:bg-prime-gold hover:text-prime-black'
]) }}>
    {{ $slot }}
</a>