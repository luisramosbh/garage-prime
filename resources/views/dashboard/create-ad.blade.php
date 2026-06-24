<x-layout.dashboard title="Novo Anúncio | Garage Prime">

    <section class="mb-10">
        <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
            Área do anunciante
        </p>

        <h1 class="text-4xl font-black md:text-5xl">
            Novo anúncio
        </h1>

        <p class="mt-3 text-prime-muted">
            Cadastre um veículo premium, esportivo ou clássico.
        </p>
    </section>

    <form class="space-y-8">

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">1. Dados básicos</h2>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <x-form.label>Categoria</x-form.label>
                    <x-form.select>
                        <option>Carro</option>
                        <option>Moto</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Segmento</x-form.label>
                    <x-form.select>
                        <option>Premium</option>
                        <option>Esportivo</option>
                        <option>Clássico</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Marca</x-form.label>
                    <x-form.input placeholder="Ex.: BMW" />
                </div>

                <div>
                    <x-form.label>Modelo</x-form.label>
                    <x-form.input placeholder="Ex.: 320i" />
                </div>

                <div>
                    <x-form.label>Versão</x-form.label>
                    <x-form.input placeholder="Ex.: M Sport" />
                </div>

                <div>
                    <x-form.label>Ano</x-form.label>
                    <x-form.input type="number" placeholder="2021" />
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">2. Detalhes do veículo</h2>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <x-form.label>Quilometragem</x-form.label>
                    <x-form.input placeholder="58.000" />
                </div>

                <div>
                    <x-form.label>Preço</x-form.label>
                    <x-form.input placeholder="189.900" />
                </div>

                <div>
                    <x-form.label>Combustível</x-form.label>
                    <x-form.select>
                        <option>Gasolina</option>
                        <option>Flex</option>
                        <option>Diesel</option>
                        <option>Elétrico</option>
                        <option>Híbrido</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Câmbio</x-form.label>
                    <x-form.select>
                        <option>Automático</option>
                        <option>Manual</option>
                        <option>CVT</option>
                    </x-form.select>
                </div>

                <div>
                    <x-form.label>Cor</x-form.label>
                    <x-form.input placeholder="Branco" />
                </div>

                <div>
                    <x-form.label>Cidade/UF</x-form.label>
                    <x-form.input placeholder="Belo Horizonte/MG" />
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
                        <input type="checkbox" class="accent-prime-gold">
                        <span>{{ $feature }}</span>
                    </label>
                @endforeach
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">4. Fotos</h2>

            <div class="rounded-2xl border border-dashed border-prime-carbon bg-prime-black p-10 text-center">
                <p class="text-xl font-bold text-prime-white">
                    Arraste as fotos aqui
                </p>

                <p class="mt-2 text-prime-muted">
                    Ou selecione até 30 imagens do veículo.
                </p>

                <div class="mt-6">
                    <x-ui.button-secondary href="#">
                        Selecionar fotos
                    </x-ui.button-secondary>
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">5. Vídeo YouTube</h2>

            <x-form.input placeholder="https://youtube.com/watch?v=..." />
        </section>

        <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
            <h2 class="mb-6 text-2xl font-black">6. Descrição</h2>

            <x-form.textarea
                rows="8"
                placeholder="Descreva histórico, estado de conservação, manutenção, diferenciais e observações importantes."
            ></x-form.textarea>
        </section>

        <section class="flex flex-col gap-4 md:flex-row md:justify-end">
            <x-ui.button-secondary href="/meus-anuncios">
                Salvar rascunho
            </x-ui.button-secondary>

            <x-ui.button-primary href="/meus-anuncios">
                Publicar anúncio
            </x-ui.button-primary>
        </section>

    </form>

</x-layout.dashboard>