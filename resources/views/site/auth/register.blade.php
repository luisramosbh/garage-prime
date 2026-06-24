<x-layout.site title="Cadastro | Garage Prime">
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.auth-card>
            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Nova conta
            </p>

            <h1 class="text-4xl font-black">
                Criar conta
            </h1>

            <p class="mt-3 text-prime-muted">
                Crie sua garagem e publique veículos especiais.
            </p>

            <form class="mt-8 space-y-5">
                <div>
                    <x-form.label>Nome</x-form.label>
                    <x-form.input placeholder="Seu nome completo" />
                </div>

                <div>
                    <x-form.label>Email</x-form.label>
                    <x-form.input type="email" placeholder="seu@email.com" />
                </div>

                <div>
                    <x-form.label>WhatsApp</x-form.label>
                    <x-form.input placeholder="(31) 99999-9999" />
                </div>

                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <x-form.label>Cidade</x-form.label>
                        <x-form.input placeholder="Belo Horizonte" />
                    </div>

                    <div>
                        <x-form.label>Estado</x-form.label>
                        <x-form.select>
                            <option>MG</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>PR</option>
                        </x-form.select>
                    </div>
                </div>

                <div>
                    <x-form.label>Senha</x-form.label>
                    <x-form.input type="password" placeholder="Crie uma senha" />
                </div>

                <div>
                    <x-form.label>Confirmar senha</x-form.label>
                    <x-form.input type="password" placeholder="Repita a senha" />
                </div>

                <x-ui.button-primary href="#" class="w-full">
                    Criar conta
                </x-ui.button-primary>
            </form>

            <p class="mt-6 text-center text-sm text-prime-muted">
                Já possui conta?
                <a href="/login" class="font-bold text-prime-gold hover:text-prime-white">
                    Entrar
                </a>
            </p>
        </x-ui.auth-card>
    </section>
</x-layout.site>