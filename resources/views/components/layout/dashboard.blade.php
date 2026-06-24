<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard | Garage Prime' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-prime-black text-prime-white">

    <div class="min-h-screen lg:flex">

        <aside class="w-full border-b border-prime-carbon bg-prime-graphite p-6 lg:min-h-screen lg:w-72 lg:border-b-0 lg:border-r">

            <a href="/" class="block max-w-56 text-xl font-black leading-8 tracking-[0.18em] text-prime-white">
                GARAGE <span class="text-prime-gold">PRIME</span>
            </a>

            <nav class="mt-10 flex flex-col gap-2">

                <a
                    href="/dashboard"
                    class="block rounded-lg px-4 py-3 font-bold transition
                    {{ request()->is('dashboard')
                        ? 'bg-prime-gold text-prime-black'
                        : 'text-prime-muted hover:bg-prime-carbon hover:text-prime-white' }}">
                    Dashboard
                </a>

                <a
                    href="/meus-anuncios"
                    class="block rounded-lg px-4 py-3 font-bold transition
                    {{ request()->is('meus-anuncios')
                        ? 'bg-prime-gold text-prime-black'
                        : 'text-prime-muted hover:bg-prime-carbon hover:text-prime-white' }}">
                    Meus anúncios
                </a>

                <a
                    href="/novo-anuncio"
                    class="block rounded-lg px-4 py-3 font-bold transition
                    {{ request()->is('novo-anuncio')
                        ? 'bg-prime-gold text-prime-black'
                        : 'text-prime-muted hover:bg-prime-carbon hover:text-prime-white' }}">
                    Novo anúncio
                </a>

                <a
                    href="#"
                    class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Perfil
                </a>

                <a
                    href="#"
                    class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Configurações
                </a>

            </nav>

            <div class="mt-10 border-t border-prime-carbon pt-6">
                <a href="/" class="block text-sm font-bold text-prime-gold hover:text-prime-white">
                    ← Voltar ao site
                </a>
            </div>

        </aside>

        <main class="min-w-0 flex-1 p-6 lg:p-10">
            {{ $slot }}
        </main>

    </div>

</body>
</html>