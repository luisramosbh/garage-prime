<label {{ $attributes->merge([
    'class' => 'mb-2 block text-sm font-bold text-prime-white'
]) }}>
    {{ $slot }}
</label>