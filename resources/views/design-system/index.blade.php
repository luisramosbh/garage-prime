<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Prime - Design System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-prime-black text-prime-white min-h-screen">

    <main class="max-w-7xl mx-auto px-8 py-12">

        <h1 class="text-5xl font-bold mb-4">
            Garage Prime
        </h1>

        <p class="text-prime-muted mb-12">
            Biblioteca visual do sistema.
        </p>

        <hr class="border-prime-carbon mb-12">

        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">
                Botões
            </h2>

            <div class="flex gap-4">

                <x-ui.button-primary href="#">
                    Anunciar Grátis
                </x-ui.button-primary>

                <x-ui.button-secondary href="#">
                    Ver Veículos
                </x-ui.button-secondary>

            </div>
        </section>

        <section class="mb-16">

            <h2 class="text-3xl font-bold mb-6">
                Paleta de Cores
            </h2>

            <div class="grid grid-cols-4 gap-4">

                <div class="rounded-lg p-8 bg-prime-black border border-prime-carbon">
                    Prime Black
                </div>

                <div class="rounded-lg p-8 bg-prime-graphite">
                    Graphite
                </div>

                <div class="rounded-lg p-8 bg-prime-carbon">
                    Carbon
                </div>

                <div class="rounded-lg p-8 bg-prime-gold text-prime-black font-bold">
                    Gold
                </div>

            </div>

        </section>

    </main>

</body>
</html>