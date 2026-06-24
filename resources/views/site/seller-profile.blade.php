<x-layout.site title="Luis Santos | Garage Prime">

    <section class="border-b border-prime-carbon bg-prime-black">

        <div class="mx-auto max-w-7xl px-6 py-16">

            <div class="flex flex-col gap-8 lg:flex-row lg:items-center">

                <div
                    class="flex h-36 w-36 items-center justify-center rounded-full bg-prime-carbon text-5xl font-black text-prime-gold">
                    LS
                </div>

                <div>

                    <p class="mb-2 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                        Perfil do vendedor
                    </p>

                    <h1 class="text-5xl font-black">
                        Luis Santos
                    </h1>

                    <div class="mt-4 flex flex-wrap gap-4 text-prime-muted">
                        <span>Belo Horizonte/MG</span>
                        <span>•</span>
                        <span>Membro desde Junho/2026</span>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="grid gap-6 md:grid-cols-3">

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <p class="text-sm text-prime-muted">
                    Veículos Ativos
                </p>

                <p class="mt-2 text-4xl font-black text-prime-gold">
                    8
                </p>
            </div>

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <p class="text-sm text-prime-muted">
                    Veículos Vendidos
                </p>

                <p class="mt-2 text-4xl font-black text-prime-gold">
                    12
                </p>
            </div>

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <p class="text-sm text-prime-muted">
                    Visualizações
                </p>

                <p class="mt-2 text-4xl font-black text-prime-gold">
                    3.548
                </p>
            </div>

        </div>

    </section>

    <section class="mx-auto max-w-7xl px-6 py-6">

        <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-8">

            <h2 class="mb-6 text-3xl font-black">
                Sobre o vendedor
            </h2>

            <div class="space-y-4 leading-8 text-prime-muted">

                <p>
                    Entusiasta automotivo com foco em veículos premium e esportivos.
                </p>

                <p>
                    Anúncios publicados com informações transparentes e contato direto com os compradores.
                </p>

            </div>

        </div>

    </section>

    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-8 flex items-end justify-between">

            <div>

                <p class="text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                    Veículos
                </p>

                <h2 class="mt-2 text-4xl font-black">
                    Anúncios ativos
                </h2>

            </div>

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
                url="/veiculo/bmw-320i-m-sport-2021"
            />

            <x-vehicle.card
                title="Mercedes C300 Sport"
                segment="Premium"
                city="Belo Horizonte"
                state="MG"
                year="2019"
                mileage="51.000"
                price="199.900"
            />

            <x-vehicle.card
                title="Golf GTI"
                segment="Esportivo"
                city="Belo Horizonte"
                state="MG"
                year="2018"
                mileage="62.000"
                price="159.900"
            />

        </div>

    </section>

    <section class="border-t border-prime-carbon bg-prime-black">

        <div class="mx-auto max-w-7xl px-6 py-14">

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-8">

                <h2 class="mb-4 text-3xl font-black">
                    Contato
                </h2>

                <p class="mb-8 text-prime-muted">
                    Entre em contato diretamente com o vendedor.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a
                        href="https://wa.me/5531999999999"
                        target="_blank"
                        class="rounded-lg bg-prime-gold px-6 py-4 font-bold text-prime-black">
                        WhatsApp
                    </a>

                    <a
                        href="#"
                        class="rounded-lg border border-prime-gold px-6 py-4 font-bold text-prime-white">
                        Instagram
                    </a>

                </div>

            </div>

        </div>

    </section>

</x-layout.site>