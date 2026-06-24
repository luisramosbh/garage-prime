<x-layout.site title="Esqueci minha senha | Garage Prime">
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.auth-card>
            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-prime-gold">
                Recuperação
            </p>

            <h1 class="text-4xl font-black">
                Esqueci minha senha
            </h1>

            <p class="mt-3 text-prime-muted">
                Informe seu email e enviaremos instruções para redefinir sua senha.
            </p>

            <form class="mt-8 space-y-5">
                <div>
                    <x-form.label>Email</x-form.label>
                    <x-form.input type="email" placeholder="seu@email.com" />
                </div>

                <x-ui.button-primary href="#" class="w-full">
                    Enviar instruções
                </x-ui.button-primary>
            </form>

            <p class="mt-6 text-center text-sm">
                <a href="/login" class="font-bold text-prime-gold hover:text-prime-white">
                    Voltar para o login
                </a>
            </p>
        </x-ui.auth-card>
    </section>
</x-layout.site>