<select {{ $attributes->merge([
    'class' => 'w-full rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-prime-white focus:border-prime-gold focus:outline-none'
]) }}>
    {{ $slot }}
</select>