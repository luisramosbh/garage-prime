<x-layout.site title="BMW 320i M Sport 2021 | Garage Prime">

    <section class="border-b border-prime-carbon bg-prime-black">
        <div class="mx-auto max-w-7xl px-6 py-10">

            <div class="mb-8">
                <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                    Premium
                </p>

                <h1 class="text-4xl font-black md:text-6xl">
                    BMW 320i M Sport 2021
                </h1>

                <div class="mt-4 flex flex-wrap gap-4 text-prime-muted">
                    <span>Belo Horizonte/MG</span>
                    <span>•</span>
                    <span>58.000 km</span>
                    <span>•</span>
                    <span>Automático</span>
                </div>
            </div>

            <div class="grid gap-8 lg:grid-cols-[1fr_380px]">

                <div>
                    <div class="overflow-hidden rounded-2xl border border-prime-carbon bg-prime-graphite">
                        <img
                            src="https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=1600&auto=format&fit=crop"
                            alt="BMW 320i M Sport"
                            class="h-[520px] w-full object-cover"
                        >
                    </div>

                    <div class="mt-4 grid grid-cols-4 gap-4">
                        <img class="h-24 rounded-xl object-cover" src="https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=400&auto=format&fit=crop">
                        <img class="h-24 rounded-xl object-cover" src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=400&auto=format&fit=crop">
                        <img class="h-24 rounded-xl object-cover" src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=400&auto=format&fit=crop">
                        <img class="h-24 rounded-xl object-cover" src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?q=80&w=400&auto=format&fit=crop">
                    </div>
                </div>

                <aside class="space-y-6">
                    <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                        <p class="text-sm text-prime-muted">
                            Valor anunciado
                        </p>

                        <p class="mt-2 text-4xl font-black text-prime-gold">
                            R$ 189.900
                        </p>

                        <a
                            href="https://wa.me/5531999999999?text=Olá! Vi o anúncio da BMW 320i M Sport 2021 no Garage Prime e gostaria de mais informações."
                            target="_blank"
                            class="mt-6 flex w-full items-center justify-center rounded-lg bg-prime-gold px-5 py-4 font-bold text-prime-black transition hover:bg-prime-gold-dark"
                        >
                            Falar com o vendedor
                        </a>
                    </div>

                    <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                        <h2 class="text-xl font-bold">
                            Vendedor
                        </h2>

                        <div class="mt-5 flex items-center gap-4">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-prime-carbon text-xl font-black text-prime-gold">
                                LS
                            </div>

                            <div>
                                <p class="font-bold">Luis Santos</p>
                                <p class="text-sm text-prime-muted">Belo Horizonte/MG</p>
                            </div>
                        </div>

                        <a href="#" class="mt-5 block text-sm font-bold text-prime-gold hover:text-prime-white">
                            Ver perfil do vendedor
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-10 px-6 py-14 lg:grid-cols-[1fr_360px]">

        <div class="space-y-12">

            <div>
                <h2 class="mb-6 text-3xl font-black">
                    Ficha técnica
                </h2>

                <div class="grid gap-4 md:grid-cols-3">
                    <x-vehicle.spec label="Ano" value="2021" />
                    <x-vehicle.spec label="Quilometragem" value="58.000 km" />
                    <x-vehicle.spec label="Combustível" value="Flex" />
                    <x-vehicle.spec label="Câmbio" value="Automático" />
                    <x-vehicle.spec label="Cor" value="Branco" />
                    <x-vehicle.spec label="Categoria" value="Carro" />
                </div>
            </div>

            <div>
                <h2 class="mb-6 text-3xl font-black">
                    Itens e diferenciais
                </h2>

                <div class="grid gap-3 md:grid-cols-2">
                    @foreach([
                        'Pacote M Sport',
                        'Bancos em couro',
                        'Teto solar',
                        'Central multimídia',
                        'Controle de tração',
                        'Sensores de estacionamento',
                        'Câmera de ré',
                        'Rodas esportivas'
                    ] as $feature)
                        <div class="rounded-xl border border-prime-carbon bg-prime-graphite px-5 py-4 text-prime-white">
                            <span class="text-prime-gold">✓</span>
                            <span class="ml-2">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h2 class="mb-6 text-3xl font-black">
                    Descrição
                </h2>

                <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6 leading-8 text-prime-muted">
                    <p>
                        BMW 320i M Sport 2021 em excelente estado de conservação, com manutenção em dia,
                        interior muito bem cuidado e configuração premium. Veículo ideal para quem busca
                        desempenho, conforto e presença.
                    </p>

                    <p class="mt-4">
                        O carro possui pacote M Sport, acabamento interno refinado, ótimo desempenho urbano
                        e rodoviário, além de visual esportivo e elegante.
                    </p>
                </div>
            </div>

            <div>
                <h2 class="mb-6 text-3xl font-black">
                    Vídeo
                </h2>

                <div class="aspect-video overflow-hidden rounded-2xl border border-prime-carbon bg-prime-graphite">
                    <iframe
                        class="h-full w-full"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="Vídeo do veículo"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>

        </div>

        <aside class="space-y-6">
            <div class="sticky top-6 rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h3 class="text-xl font-bold">
                    Interesse neste veículo?
                </h3>

                <p class="mt-3 text-sm leading-6 text-prime-muted">
                    Fale diretamente com o vendedor pelo WhatsApp. O Garage Prime não participa da negociação.
                </p>

                <a
                    href="https://wa.me/5531999999999?text=Olá! Vi o anúncio da BMW 320i M Sport 2021 no Garage Prime e gostaria de mais informações."
                    target="_blank"
                    class="mt-6 flex w-full items-center justify-center rounded-lg bg-prime-gold px-5 py-4 font-bold text-prime-black transition hover:bg-prime-gold-dark"
                >
                    Chamar no WhatsApp
                </a>
            </div>
        </aside>

    </section>

    <section class="border-t border-prime-carbon bg-prime-black">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <div class="mb-8">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                    Relacionados
                </p>

                <h2 class="mt-2 text-4xl font-black">
                    Outros veículos que podem interessar
                </h2>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <x-vehicle.card
                    title="Audi A4 Performance 2020"
                    segment="Premium"
                    city="São Paulo"
                    state="SP"
                    year="2020"
                    mileage="44.000"
                    price="174.900"
                />

                <x-vehicle.card
                    title="Mercedes C300 Sport 2019"
                    segment="Premium"
                    city="Curitiba"
                    state="PR"
                    year="2019"
                    mileage="51.000"
                    price="199.900"
                />

                <x-vehicle.card
                    title="Golf GTI 2018"
                    segment="Esportivo"
                    city="Belo Horizonte"
                    state="MG"
                    year="2018"
                    mileage="62.000"
                    price="159.900"
                />
            </div>
        </div>
    </section>

</x-layout.site>