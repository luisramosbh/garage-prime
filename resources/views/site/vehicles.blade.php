<x-layout.site title="Veículos | Garage Prime">

    <section class="border-b border-prime-carbon bg-prime-black">
        <div class="mx-auto max-w-7xl px-6 py-12">

            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Busca de Veículos
            </p>

            <h1 class="text-5xl font-black">
                Encontre seu próximo veículo
            </h1>

            <p class="mt-4 max-w-2xl text-prime-muted">
                Veículos premium, esportivos e clássicos selecionados.
            </p>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="grid gap-8 lg:grid-cols-[300px_1fr]">

            <aside>
                <x-vehicle.filter-sidebar />
            </aside>

            <div>

                <div class="mb-8 flex items-center justify-between">

                    <h2 class="text-2xl font-bold">
                        12 veículos encontrados
                    </h2>

                    <x-form.select class="w-56">
                        <option>Mais recentes</option>
                        <option>Menor preço</option>
                        <option>Maior preço</option>
                        <option>Menor KM</option>
                    </x-form.select>

                </div>

                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

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
                        title="Audi A4 Performance"
                        segment="Premium"
                        city="São Paulo"
                        state="SP"
                        year="2020"
                        mileage="44.000"
                        price="174.900"
                    />

                    <x-vehicle.card
                        title="Porsche 911 Carrera"
                        segment="Clássico"
                        city="Curitiba"
                        state="PR"
                        year="2010"
                        mileage="42.000"
                        price="489.900"
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

                    <x-vehicle.card
                        title="Mercedes C300"
                        segment="Premium"
                        city="Rio de Janeiro"
                        state="RJ"
                        year="2019"
                        mileage="51.000"
                        price="199.900"
                    />

                    <x-vehicle.card
                        title="Harley Fat Boy"
                        segment="Premium"
                        city="Brasília"
                        state="DF"
                        year="2018"
                        mileage="18.000"
                        price="89.900"
                    />

                </div>

                <div class="mt-12 flex justify-center gap-2">

                    <button class="rounded-lg border border-prime-carbon px-4 py-2">
                        1
                    </button>

                    <button class="rounded-lg border border-prime-carbon px-4 py-2">
                        2
                    </button>

                    <button class="rounded-lg border border-prime-carbon px-4 py-2">
                        3
                    </button>

                </div>

            </div>

        </div>

    </section>

</x-layout.site>