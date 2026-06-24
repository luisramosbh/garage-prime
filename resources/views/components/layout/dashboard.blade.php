<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard | Garage Prime' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-prime-black text-prime-white">

    <div class="grid min-h-screen lg:grid-cols-[280px_1fr]">

        <aside class="border-r border-prime-carbon bg-prime-graphite p-6">
            <a href="/" class="block text-2xl font-black tracking-[0.2em] text-prime-white">
                GARAGE <span class="text-prime-gold">PRIME</span>
            </a>

            <nav class="mt-10 space-y-2">
                <a href="/dashboard" class="block rounded-lg bg-prime-gold px-4 py-3 font-bold text-prime-black">
                    Dashboard
                </a>

                <a href="/meus-anuncios" class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Meus anúncios
                </a>

                <a href="#" class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Novo anúncio
                </a>

                <a href="#" class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Perfil
                </a>

                <a href="#" class="block rounded-lg px-4 py-3 text-prime-muted hover:bg-prime-carbon hover:text-prime-white">
                    Configurações
                </a>
            </nav>

            <div class="mt-10 border-t border-prime-carbon pt-6">
                <a href="/" class="block text-sm font-bold text-prime-gold hover:text-prime-white">
                    ← Voltar ao site
                </a>
            </div>
        </aside>

        <main class="p-6 lg:p-10">
            {{ $slot }}
        </main>

    </div>

</body>
</html>