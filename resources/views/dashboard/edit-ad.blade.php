<x-layout.dashboard title="Editar Anúncio | Garage Prime">

    <section class="mb-10 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div>
            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Área do anunciante
            </p>

            <h1 class="text-4xl font-black md:text-5xl">
                Editar anúncio
            </h1>

            <p class="mt-3 text-prime-muted">
                Atualize as informações do veículo BMW 320i M Sport 2021.
            </p>
        </div>

        <x-ui.button-secondary href="/veiculo/bmw-320i-m-sport-2021">
            Ver anúncio
        </x-ui.button-secondary>
    </section>

    <form class="space-y-8">

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">1. Dados básicos</h2>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <x-form.label>Categoria</x-form.label>
                    <x-form.select>
                        <option selected>Carro</option>
                        <option>Moto</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Segmento</x-form.label>
                    <x-form.select>
                        <option selected>Premium</option>
                        <option>Esportivo</option>
                        <option>Clássico</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Marca</x-form.label>
                    <x-form.input value="BMW" />
                </div>

                <div>
                    <x-form.label>Modelo</x-form.label>
                    <x-form.input value="320i" />
                </div>

                <div>
                    <x-form.label>Versão</x-form.label>
                    <x-form.input value="M Sport" />
                </div>

                <div>
                    <x-form.label>Ano</x-form.label>
                    <x-form.input type="number" value="2021" />
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">2. Detalhes do veículo</h2>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <x-form.label>Quilometragem</x-form.label>
                    <x-form.input value="58000" />
                </div>

                <div>
                    <x-form.label>Preço</x-form.label>
                    <x-form.input value="189900" />
                </div>

                <div>
                    <x-form.label>Combustível</x-form.label>
                    <x-form.select>
                        <option>Gasolina</option>
                        <option selected>Flex</option>
                        <option>Diesel</option>
                        <option>Elétrico</option>
                        <option>Híbrido</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Câmbio</x-form.label>
                    <x-form.select>
                        <option selected>Automático</option>
                        <option>Manual</option>
                        <option>CVT</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Cor</x-form.label>
                    <x-form.input value="Branco" />
                </div>

                <div>
                    <x-form.label>Cidade/UF</x-form.label>
                    <x-form.input value="Belo Horizonte/MG" />
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">3. Itens e diferenciais</h2>

            <div class="grid gap-4 md:grid-cols-3">
                @foreach([
                    'Ar-condicionado',
                    'Bancos em couro',
                    'Teto solar',
                    'Central multimídia',
                    'Câmera de ré',
                    'Sensor de estacionamento',
                    'Controle de tração',
                    'Piloto automático',
                    'Rodas esportivas'
                ] as $feature)
                    <label class="flex items-center gap-3 rounded-xl border border-prime-carbon bg-prime-black p-4 text-prime-muted">
                        <input
                            type="checkbox"
                            class="accent-prime-gold"
                            @checked(in_array($feature, [
                                'Bancos em couro',
                                'Teto solar',
                                'Central multimídia',
                                'Câmera de ré',
                                'Controle de tração',
                                'Rodas esportivas'
                            ]))
                        >
                        <span>{{ $feature }}</span>
                    </label>
                @endforeach
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">4. Fotos atuais</h2>

            <div class="grid gap-4 md:grid-cols-4">
                @foreach([
                    'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=500&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=500&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=500&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?q=80&w=500&auto=format&fit=crop',
                ] as $photo)
                    <div class="relative overflow-hidden rounded-xl border border-prime-carbon">
                        <img src="{{ $photo }}" class="h-32 w-full object-cover">

                        <button
                            type="button"
                            class="absolute right-2 top-2 rounded-full bg-prime-danger px-3 py-1 text-xs font-bold text-white">
                            Remover
                        </button>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 rounded-2xl border border-dashed border-prime-carbon bg-prime-black p-8 text-center">
                <p class="text-lg font-bold text-prime-white">
                    Adicionar novas fotos
                </p>

                <p class="mt-2 text-sm text-prime-muted">
                    Selecione novas imagens para complementar o anúncio.
                </p>

                <div class="mt-5">
                    <x-ui.button-secondary href="#">
                        Selecionar fotos
                    </x-ui.button-secondary>
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">5. Vídeo YouTube</h2>

            <x-form.input value="https://youtube.com/watch?v=dQw4w9WgXcQ" />
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">6. Descrição</h2>

            <x-form.textarea rows="8">
            BMW 320i M Sport 2021 em excelente estado de conservação, com manutenção em dia, interior muito bem cuidado e configuração premium.
            </x-form.textarea>
        </section>

        <section class="flex flex-col gap-4 md:flex-row md:justify-between">
            <div class="flex flex-col gap-4 md:flex-row">
                <x-ui.button-secondary href="/meus-anuncios">
                    Cancelar
                </x-ui.button-secondary>

                <button type="button" class="rounded-lg bg-prime-danger px-5 py-3 font-bold text-white transition hover:opacity-80">
                    Excluir anúncio
                </button>
            </div>

            <x-ui.button-primary href="/meus-anuncios">
                Salvar alterações
            </x-ui.button-primary>
        </section>

    </form>

</x-layout.dashboard>