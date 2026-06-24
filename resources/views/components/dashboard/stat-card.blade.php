<div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
    <p class="text-sm text-prime-muted">
        {{ $label }}
    </p>

    <p class="mt-3 text-4xl font-black text-prime-gold">
        {{ $value }}
    </p>

    @isset($description)
        <p class="mt-2 text-sm text-prime-muted">
            {{ $description }}
        </p>
    @endisset
</div>