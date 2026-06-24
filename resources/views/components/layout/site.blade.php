<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Garage Prime' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-prime-black text-prime-white">

    <x-layout.header />

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />

</body>
</html>