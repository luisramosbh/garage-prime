<x-layout.dashboard title="Meu Perfil | Garage Prime">

    <section class="mb-10">
        <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
            Área do anunciante
        </p>

        <h1 class="text-4xl font-black md:text-5xl">
            Meu perfil
        </h1>

        <p class="mt-3 text-prime-muted">
            Atualize suas informações públicas de vendedor.
        </p>
    </section>

    <form class="grid gap-8 xl:grid-cols-[1fr_360px]">

        <section class="space-y-8">

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="mb-6 text-2xl font-black">
                    Dados pessoais
                </h2>

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <x-form.label>Nome</x-form.label>
                        <x-form.input value="Luis Santos" />
                    </div>

                    <div>
                        <x-form.label>Email</x-form.label>
                        <x-form.input type="email" value="luisramosbh@gmail.com" />
                    </div>

                    <div>
                        <x-form.label>WhatsApp</x-form.label>
                        <x-form.input value="(31) 99999-9999" />
                    </div>

                    <div>
                        <x-form.label>Instagram</x-form.label>
                        <x-form.input value="@garageprime" />
                    </div>

                    <div>
                        <x-form.label>Cidade</x-form.label>
                        <x-form.input value="Belo Horizonte" />
                    </div>

                    <div>
                        <x-form.label>Estado</x-form.label>
                        <x-form.select>
                            <option selected>MG</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>PR</option>
                            <option>DF</option>
                        </x-form.select>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="mb-6 text-2xl font-black">
                    Biografia
                </h2>

                <x-form.textarea rows="7" placeholder="Conte um pouco sobre você, sua relação com veículos e seu perfil como vendedor.">Entusiasta automotivo com foco em veículos premium, esportivos e clássicos.</x-form.textarea>
            </div>

            <div class="flex flex-col gap-4 md:flex-row md:justify-end">
                <x-ui.button-secondary href="/dashboard">
                    Cancelar
                </x-ui.button-secondary>

                <x-ui.button-primary href="/dashboard">
                    Salvar perfil
                </x-ui.button-primary>
            </div>

        </section>

        <aside class="space-y-6">

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="mb-6 text-2xl font-black">
                    Foto do perfil
                </h2>

                <div class="flex flex-col items-center text-center">
                    <div class="flex h-32 w-32 items-center justify-center rounded-full bg-prime-carbon text-4xl font-black text-prime-gold">
                        LS
                    </div>

                    <p class="mt-4 text-sm text-prime-muted">
                        Use uma foto nítida para transmitir mais confiança aos compradores.
                    </p>

                    <div class="mt-6">
                        <x-ui.button-secondary href="#">
                            Alterar foto
                        </x-ui.button-secondary>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-prime-carbon bg-prime-graphite p-6">
                <h2 class="text-2xl font-black">
                    Perfil público
                </h2>

                <p class="mt-3 text-sm leading-6 text-prime-muted">
                    Essas informações aparecem na sua página pública de vendedor.
                </p>

                <a href="/vendedor/luis-santos" class="mt-5 block text-sm font-bold text-prime-gold hover:text-prime-white">
                    Ver perfil público
                </a>
            </div>

        </aside>

    </form>

</x-layout.dashboard>