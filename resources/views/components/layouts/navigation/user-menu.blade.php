<li class="nav-item">
    <x-ui.dropdown 
        id="userDropdown"
        class="nav-link link-orange d-flex align-items-center gap-2"
    >
        <x-slot name="trigger">
            <i class="bi bi-person-circle text-orange" aria-hidden="true"></i>
            {{ Auth::user()->name }}
            <i class="bi bi-chevron-down" aria-hidden="true"></i>
        </x-slot>

        <x-slot name="content">
            <x-ui.links.dropdown
                :href="route('profile.edit')"
                icon="bi bi-person"
            >
                {{ __('Profile') }}
            </x-ui.links.dropdown>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-ui.links.dropdown
                    :href="route('logout')"
                    icon="bi bi-box-arrow-right"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                >
                    {{ __('Log Out') }}
                </x-ui.links.dropdown>
            </form>
        </x-slot>
    </x-ui.dropdown>
</li>
