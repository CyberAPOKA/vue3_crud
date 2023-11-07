<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- adicionei o app.css na importação abaixo para que o thema do primevue seja carregado depois do tailwind base, pois, ele estava causando conflitos. --}}
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', 'resources/css/app.css', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead

    <link id="theme-link" rel="stylesheet" href="{{ asset('themes/lara-light-purple/theme.css') }}">
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
