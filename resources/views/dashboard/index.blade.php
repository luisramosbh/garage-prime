<x-layout.dashboard title="Dashboard | Garage Prime">

    <section class="mb-10">
        <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
            Área do anunciante
        </p>

        <h1 class="text-4xl font-black md:text-5xl">
            Olá, Luis
        </h1>

        <p class="mt-3 text-prime-muted">
            Acompanhe seus anúncios, visualizações e contatos recebidos.
        </p>
    </section>

    <section class="mb-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <x-dashboard.stat-card
            label="Anúncios ativos"
            value="8"
            description="Veículos publicados"
        />

        <x-dashboard.stat-card
            label="Visualizações"
            value="3.548"
            description="Total acumulado"
        />

        <x-dashboard.stat-card
            label="Favoritos"
            value="42"
            description="Usuários interessados"
        />

        <x-dashboard.stat-card
            label="Contatos"
            value="19"
            description="Cliques no WhatsApp"
        />
    </section>

    <section class="grid gap-8 xl:grid-cols-[1fr_360px]">

        <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">

            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-black">
                        Últimos anúncios
                    </h2>

                    <p class="mt-1 text-sm text-prime-muted">
                        Seus veículos publicados recentemente.
                    </p>
                </div>

                <a href="#" class="text-sm font-bold text-prime-gold hover:text-prime-white">
                    Ver todos
                </a>
            </div>

            <div class="space-y-4">
                @foreach([
                    ['BMW 320i M Sport 2021', 'Ativo', '189.900'],
                    ['Mercedes C300 Sport', 'Ativo', '199.900'],
                    ['Golf GTI', 'Vendido', '159.900'],
                ] as [$title, $status, $price])
                    <div class="flex flex-col gap-4 rounded-xl border border-prime-carbon bg-prime-black p-4 md:flex-row md:items-center md:justify-between">

                        <div>
                            <h3 class="font-bold text-prime-white">
                                {{ $title }}
                            </h3>

                            <p class="mt-1 text-sm text-prime-muted">
                                R$ {{ $price }}
                            </p>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="rounded-full bg-prime-gold px-3 py-1 text-xs font-bold text-prime-black">
                                {{ $status }}
                            </span>

                            <a href="/editar-anuncio/1" class="text-sm font-bold text-prime-gold hover:text-prime-white">
                                Editar
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

        <aside class="space-y-6">

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="text-2xl font-black">
                    Próximo passo
                </h2>

                <p class="mt-3 text-sm leading-6 text-prime-muted">
                    Publique um novo veículo com boas fotos, descrição completa e contato atualizado.
                </p>

                <x-ui.button-primary href="#" class="mt-6 w-full">
                    Novo anúncio
                </x-ui.button-primary>
            </div>

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="text-2xl font-black">
                    Dica Garage Prime
                </h2>

                <p class="mt-3 text-sm leading-6 text-prime-muted">
                    Anúncios com pelo menos 10 fotos e descrição detalhada tendem a gerar mais contatos.
                </p>
            </div>

        </aside>

    </section>

</x-layout.dashboard>