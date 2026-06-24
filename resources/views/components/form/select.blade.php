<select {{ $attributes->merge([
    'class' => 'w-full min-h-12 rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-base text-prime-white transition focus:border-prime-gold focus:outline-none focus:ring-2 focus:ring-prime-gold/20'
]) }}>
    {{ $slot }}
</select>