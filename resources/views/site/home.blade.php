<x-layout.site title="Garage Prime">

    <section class="relative overflow-hidden border-b border-prime-carbon">

        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1800&auto=format&fit=crop"
                alt="Veículo esportivo"
                class="h-full w-full object-cover opacity-40"
            >
            <div class="absolute inset-0 bg-gradient-to-r from-prime-black via-prime-black/80 to-prime-black/30"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-28">
            <div class="max-w-3xl">
                <p class="mb-4 text-sm font-bold uppercase tracking-[0.3em] text-prime-gold">
                    Veículos especiais
                </p>

                <h1 class="text-5xl font-black leading-tight md:text-7xl">
                    Premium, esportivos e clássicos em um só lugar.
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-prime-muted">
                    Uma curadoria elegante para quem busca carros e motos com história,
                    presença e personalidade.
                </p>

                <div class="mt-8 flex gap-4">
                    <x-ui.button-primary href="#">
                        Ver veículos
                    </x-ui.button-primary>

                    <x-ui.button-secondary href="#">
                        Anunciar Grátis
                    </x-ui.button-secondary>
                </div>
            </div>
        </div>

    </section>

    <section class="mx-auto max-w-7xl px-6 py-10">
        <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-bold">
                Busca rápida
            </h2>

            <div class="grid gap-4 md:grid-cols-5">
                <select class="rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-prime-muted">
                    <option>Categoria</option>
                    <option>Carro</option>
                    <option>Moto</option>
                </select>

                <select class="rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-prime-muted">
                    <option>Segmento</option>
                    <option>Premium</option>
                    <option>Esportivo</option>
                    <option>Clássico</option>
                </select>

                <input class="rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-prime-white" placeholder="Marca">

                <input class="rounded-lg border border-prime-carbon bg-prime-black px-4 py-3 text-prime-white" placeholder="Cidade">

                <x-ui.button-primary href="#" class="w-full">
                    Buscar
                </x-ui.button-primary>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="mb-8 flex items-end justify-between">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                    Destaques
                </p>

                <h2 class="mt-2 text-4xl font-black">
                    Veículos em evidência
                </h2>
            </div>

            <a href="#" class="text-sm font-bold text-prime-gold hover:text-prime-white">
                Ver todos
            </a>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <x-vehicle.card
                title="BMW 320i M Sport 2021"
                segment="Premium"
                city="Belo Horizonte"
                state="MG"
                year="2021"
                mileage="58.000"
                price="189.900"
            />

            <x-vehicle.card
                title="Porsche 911 Carrera 2010"
                segment="Clássico"
                city="São Paulo"
                state="SP"
                year="2010"
                mileage="42.000"
                price="489.900"
            />

            <x-vehicle.card
                title="Harley-Davidson Fat Boy"
                segment="Premium"
                city="Curitiba"
                state="PR"
                year="2018"
                mileage="18.000"
                price="89.900"
            />
        </div>
    </section>

</x-layout.site>