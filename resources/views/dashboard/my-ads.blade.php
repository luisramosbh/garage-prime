<x-layout.dashboard title="Meus Anúncios | Garage Prime">

    <section class="mb-10 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div>
            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Área do anunciante
            </p>

            <h1 class="text-4xl font-black md:text-5xl">
                Meus anúncios
            </h1>

            <p class="mt-3 text-prime-muted">
                Gerencie seus veículos publicados no Garage Prime.
            </p>
        </div>

        <x-ui.button-primary href="#">
            + Novo anúncio
        </x-ui.button-primary>
    </section>

    <section class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">

        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-black">
                Anúncios cadastrados
            </h2>

            <x-form.select class="md:w-56">
                <option>Todos os status</option>
                <option>Ativo</option>
                <option>Vendido</option>
                <option>Rascunho</option>
                <option>Pausado</option>
            </x-form.select>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[900px] border-collapse">
                <thead>
                    <tr class="border-b border-prime-carbon text-left text-sm text-prime-muted">
                        <th class="py-4 pr-4">Veículo</th>
                        <th class="py-4 pr-4">Preço</th>
                        <th class="py-4 pr-4">Status</th>
                        <th class="py-4 pr-4">Views</th>
                        <th class="py-4 pr-4">Favoritos</th>
                        <th class="py-4 pr-4">Contatos</th>
                        <th class="py-4 text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-prime-carbon">
                    @foreach([
                        ['BMW 320i M Sport 2021', 'Premium', '189.900', 'Ativo', '1.240', '18', '9'],
                        ['Mercedes C300 Sport 2019', 'Premium', '199.900', 'Ativo', '842', '11', '6'],
                        ['Golf GTI 2018', 'Esportivo', '159.900', 'Vendido', '1.466', '21', '14'],
                        ['Porsche 911 Carrera 2010', 'Clássico', '489.900', 'Rascunho', '0', '0', '0'],
                    ] as [$title, $segment, $price, $status, $views, $favorites, $leads])
                        <tr>
                            <td class="py-5 pr-4">
                                <div class="flex items-center gap-4">
                                    <img
                                        src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=300&auto=format&fit=crop"
                                        alt="{{ $title }}"
                                        class="h-16 w-24 rounded-lg object-cover"
                                    >

                                    <div>
                                        <h3 class="font-bold text-prime-white">
                                            {{ $title }}
                                        </h3>

                                        <p class="mt-1 text-sm text-prime-muted">
                                            {{ $segment }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="py-5 pr-4 font-bold text-prime-gold">
                                R$ {{ $price }}
                            </td>

                            <td class="py-5 pr-4">
                                <span class="rounded-full px-3 py-1 text-xs font-bold
                                    @if($status === 'Ativo') bg-prime-success text-prime-black
                                    @elseif($status === 'Vendido') bg-prime-carbon text-prime-white
                                    @elseif($status === 'Rascunho') bg-prime-gold text-prime-black
                                    @else bg-prime-danger text-prime-white
                                    @endif
                                ">
                                    {{ $status }}
                                </span>
                            </td>

                            <td class="py-5 pr-4 text-prime-muted">
                                {{ $views }}
                            </td>

                            <td class="py-5 pr-4 text-prime-muted">
                                {{ $favorites }}
                            </td>

                            <td class="py-5 pr-4 text-prime-muted">
                                {{ $leads }}
                            </td>

                            <td class="py-5 text-right">
                                <div class="flex justify-end gap-3">
                                    <a href="#" class="text-sm font-bold text-prime-gold hover:text-prime-white">
                                        Editar
                                    </a>

                                    <a href="#" class="text-sm font-bold text-prime-muted hover:text-prime-white">
                                        Ver
                                    </a>

                                    <a href="#" class="text-sm font-bold text-prime-danger hover:text-prime-white">
                                        Excluir
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

</x-layout.dashboard>