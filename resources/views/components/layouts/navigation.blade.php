<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}">
            <img src="assets/sport-car.png" alt="Автомагазин" width="32" height="32">
            <x-nav-link :active="request()->routeIs('main')" :href="route('main')">
                <h2 class="h5 mb-0 link-orange">
                    {{ __('Autoshop') }}
                </h2>
            </x-nav-link>
        </a>

        <button class="navbar-toggler text-orange" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
            aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav ms-auto">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            {{ Auth::user()->name }}
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="d-flex align-items-center gap-2">
                                <i class="bi bi-person text-orange"></i>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="d-flex align-items-center gap-2"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="bi bi-box-arrow-right text-orange"></i>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <x-nav-link class="text-secondary link-orange d-inline-flex align-items-center gap-1 text-decoration-none" :active="request()->routeIs('register')" :href="route('register')">
                                <i class="bi bi-person-fill text-orange"></i>
                                <span>{{ __('Register') }}</span>
                            </x-nav-link>
                        @endif
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="text-secondary link-orange d-inline-flex align-items-center gap-1 text-decoration-none"  :active="request()->routeIs('login')" :href="route('login')">
                            <i class="bi bi-lock-fill text-orange"></i>
                            <span>{{ __('Authorization') }}</span>
                        </x-nav-link>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
