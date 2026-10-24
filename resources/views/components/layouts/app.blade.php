<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link href="/assets/default_car.svg" rel="icon" type="image/png" sizes="32x32">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white d-flex flex-column min-vh-100">
    <header class="bg-white border-bottom">
        <x-layouts.navigation.navbar />
    </header>

    <main class="flex-grow-1">
        <div class="container py-4">
            {{ $slot }}
        </div>
    </main>

    <footer class="py-5">
        <div class="container">
            <p class="text-center text-gray mb-0 small">&copy; {{ date('Y') }} {{ config('app.name') }}. Все права защищены.</p>
        </div>
    </footer>
</body>

</html>
