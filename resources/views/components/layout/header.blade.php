<header class="sticky top-0 z-50 border-b border-prime-carbon bg-prime-black/95 backdrop-blur">
    <div class="mx-auto flex min-h-20 max-w-7xl items-center justify-between gap-6 px-6">

        <a href="/" class="shrink-0 text-xl font-black leading-7 tracking-[0.18em] text-prime-white md:text-2xl">
            GARAGE <span class="text-prime-gold">PRIME</span>
        </a>

        <nav class="hidden items-center gap-6 text-sm font-medium text-prime-muted lg:flex">
            <a href="/veiculos" class="transition hover:text-prime-gold">Veículos</a>
            <a href="/veiculos" class="transition hover:text-prime-gold">Carros</a>
            <a href="/veiculos" class="transition hover:text-prime-gold">Motos</a>
            <a href="/veiculos" class="transition hover:text-prime-gold">Premium</a>
            <a href="/veiculos" class="transition hover:text-prime-gold">Clássicos</a>
        </nav>

        <div class="hidden shrink-0 items-center gap-3 md:flex">
            <x-ui.button-secondary href="/login" size="sm">
                Entrar
            </x-ui.button-secondary>

            <x-ui.button-primary href="/novo-anuncio" size="sm">
                Anunciar
            </x-ui.button-primary>
        </div>

        <div class="flex items-center gap-3 md:hidden">
            <x-ui.button-primary href="/novo-anuncio" class="px-4 py-2 text-sm">
                Anunciar
            </x-ui.button-primary>
        </div>

    </div>
</header>