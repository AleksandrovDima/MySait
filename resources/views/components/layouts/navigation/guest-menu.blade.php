@if (Route::has('register'))
    <li class="nav-item">
        <x-ui.links.nav :href="route('register')" icon="bi bi-person-fill">
            {{ __('Register') }}
        </x-ui.links.nav>
    </li>
@endif
<li class="nav-item">
    <x-ui.links.nav :href="route('login')" icon="bi bi-lock-fill">
        {{ __('Authorization') }}
    </x-ui.links.nav>
</li>
