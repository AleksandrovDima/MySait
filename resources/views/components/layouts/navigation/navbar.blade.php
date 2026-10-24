<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <x-layouts.navigation.brand />

        <button class="navbar-toggler text-orange" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
            aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="bi bi-list" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
                @auth
                    <x-layouts.navigation.user-menu />
                @else
                    <x-layouts.navigation.guest-menu />
                @endauth
            </ul>
        </div>
    </div>
</nav>
