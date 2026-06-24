<article class="group overflow-hidden rounded-2xl border border-prime-carbon bg-prime-graphite shadow-lg transition duration-300 hover:-translate-y-1 hover:border-prime-gold hover:shadow-2xl">

    <a href="{{ $url ?? '#' }}" class="block">

        <div class="relative overflow-hidden">
            <img
                src="{{ $image ?? 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1200&auto=format&fit=crop' }}"
                alt="{{ $title }}"
                class="h-60 w-full object-cover transition duration-500 group-hover:scale-105"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-prime-black/80 via-transparent to-transparent"></div>

            <div class="absolute left-4 top-4 flex gap-2">
                <span class="rounded-full bg-prime-gold px-3 py-1 text-xs font-black uppercase tracking-wide text-prime-black">
                    {{ $segment }}
                </span>

                <span class="rounded-full border border-prime-gold bg-prime-black/80 px-3 py-1 text-xs font-bold uppercase tracking-wide text-prime-gold">
                    Verificado
                </span>
            </div>

            <button
                type="button"
                class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center rounded-full border border-prime-carbon bg-prime-black/80 text-prime-white transition hover:border-prime-gold hover:text-prime-gold"
                aria-label="Favoritar veículo"
            >
                ♥
            </button>

            <div class="absolute bottom-4 left-4 right-4">
                <p class="text-2xl font-black text-prime-white">
                    R$ {{ $price }}
                </p>
            </div>
        </div>

        <div class="space-y-4 p-5">

            <div>
                <h3 class="line-clamp-2 text-xl font-black text-prime-white transition group-hover:text-prime-gold">
                    {{ $title }}
                </h3>

                <p class="mt-2 text-sm text-prime-muted">
                    {{ $city }}/{{ $state }}
                </p>
            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">
                <div class="rounded-lg bg-prime-black px-3 py-2 text-prime-muted">
                    <span class="block text-xs text-prime-muted">Ano</span>
                    <strong class="text-prime-white">{{ $year }}</strong>
                </div>

                <div class="rounded-lg bg-prime-black px-3 py-2 text-prime-muted">
                    <span class="block text-xs text-prime-muted">KM</span>
                    <strong class="text-prime-white">{{ $mileage }}</strong>
                </div>
            </div>

            <div class="flex items-center justify-between border-t border-prime-carbon pt-4">
                <span class="text-sm font-bold text-prime-gold">
                    Ver anúncio
                </span>

                <span class="text-prime-gold transition group-hover:translate-x-1">
                    →
                </span>
            </div>

        </div>

    </a>

</article>