@props(['title'])

<x-layouts.app>
    <h3 class="text-dark fs-2 fw-semibold mb-4">{{ $title }}</h3>

    {{ $slot }}
</x-layouts.app>