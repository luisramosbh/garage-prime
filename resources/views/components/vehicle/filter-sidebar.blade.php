<div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">

    <h2 class="mb-6 text-xl font-bold">
        Filtros
    </h2>

    <div class="space-y-5">

        <div>
            <label class="mb-2 block text-sm text-prime-muted">
                Categoria
            </label>

            <x-form.select>
                <option>Todos</option>
                <option>Carros</option>
                <option>Motos</option>
            </x-form.select>
        </div>

        <div>
            <label class="mb-2 block text-sm text-prime-muted">
                Segmento
            </label>

            <x-form.select>
                <option>Todos</option>
                <option>Premium</option>
                <option>Esportivo</option>
                <option>Clássico</option>
            </x-form.select>
        </div>

        <div>
            <label class="mb-2 block text-sm text-prime-muted">
                Marca
            </label>

            <x-form.input placeholder="Ex.: BMW" />
        </div>

        <div>
            <label class="mb-2 block text-sm text-prime-muted">
                Cidade
            </label>

            <x-form.input placeholder="Ex.: Belo Horizonte" />
        </div>

        <div>
            <label class="mb-2 block text-sm text-prime-muted">
                Preço máximo
            </label>

            <x-form.input placeholder="Ex.: 200000" />
        </div>

        <x-ui.button-primary href="#" class="w-full">
            Buscar
        </x-ui.button-primary>

    </div>

</div>