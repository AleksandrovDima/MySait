<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Автомагазин') }}</title>
    <link href="assets/sport-car.png" rel="icon" type="image/png" sizes="32x32">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body  class="bg-white text-secondary d-flex flex-column min-vh-100">
    <div class="d-flex flex-column flex-fill">
        <header class="bg-white">
            <x-layouts.navigation/>
            <div class="border-bottom">
                <div class="container py-3">
                    {{ $header }}
                </div>
            </div>
        </header>

        <main class="container">
            {{ $slot }}
        </main>

        <footer class="mt-auto py-5">
            <div class="container">
                <p class="text-center text-secondary mb-0 small">&copy; {{ date('Y') }} {{ __('Autoshop') }}. Все права защищены.</p>
            </div>
        </footer>
    </div>
    <script>
        let myModalEl = document.querySelector('[data-modal="1"]');
        if (myModalEl) {
            const myModal = new bootstrap.Modal(myModalEl);
            myModal.show();
        }
    </script>
</body>

</html>
