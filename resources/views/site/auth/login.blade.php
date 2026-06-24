<x-layout.site title="Entrar | Garage Prime">
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.auth-card>
            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Acesso
            </p>

            <h1 class="text-4xl font-black">
                Entrar
            </h1>

            <p class="mt-3 text-prime-muted">
                Acesse sua garagem e gerencie seus anúncios.
            </p>

            <form class="mt-8 space-y-5">
                <div>
                    <x-form.label>Email</x-form.label>
                    <x-form.input type="email" placeholder="seu@email.com" />
                </div>

                <div>
                    <x-form.label>Senha</x-form.label>
                    <x-form.input type="password" placeholder="Sua senha" />
                </div>

                <x-ui.button-primary href="#" class="w-full">
                    Entrar
                </x-ui.button-primary>
            </form>

            <div class="mt-6 flex justify-between text-sm">
                <a href="/esqueci-senha" class="text-prime-gold hover:text-prime-white">
                    Esqueci minha senha
                </a>

                <a href="/cadastro" class="text-prime-gold hover:text-prime-white">
                    Criar conta
                </a>
            </div>
        </x-ui.auth-card>
    </section>
</x-layout.site>