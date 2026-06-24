<article class="overflow-hidden rounded-2xl border border-prime-carbon bg-prime-graphite transition hover:-translate-y-1 hover:border-prime-gold">

    <div class="relative">
        <img
            src="{{ $image ?? 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1200&auto=format&fit=crop' }}"
            alt="{{ $title }}"
            class="h-56 w-full object-cover"
        >

        <span class="absolute left-4 top-4 rounded-full bg-prime-gold px-3 py-1 text-xs font-bold text-prime-black">
            {{ $segment }}
        </span>
    </div>

    <div class="space-y-4 p-5">
        <div>
            <h3 class="text-xl font-bold text-prime-white">
                {{ $title }}
            </h3>

            <p class="mt-1 text-sm text-prime-muted">
                {{ $city }}/{{ $state }}
            </p>
        </div>

        <div class="flex gap-4 text-sm text-prime-muted">
            <span>{{ $year }}</span>
            <span>{{ $mileage }} km</span>
        </div>

        <p class="text-2xl font-black text-prime-gold">
            R$ {{ $price }}
        </p>

        <x-ui.button-primary href="{{ $url ?? '#' }}" class="w-full">
            Ver anúncio
        </x-ui.button-primary>
    </div>

</article>