<x-ui.dropdown.dropdown id="userDropdown">
    <x-slot name="trigger">
        {{ Auth::user()->name }}
    </x-slot>

    <x-slot name="content">
        <x-ui.dropdown.dropdown-link
            :href="route('profile.edit')"
            class="d-flex align-items-center gap-2 link-orange"
        >
            <i class="bi bi-person text-orange"></i>
            {{ __('Profile') }}
        </x-ui.dropdown.dropdown-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-ui.dropdown.dropdown-link
                :href="route('logout')"
                class="d-flex align-items-center gap-2 link-orange"
                onclick="event.preventDefault(); this.closest('form').submit();"
            >
                <i class="bi bi-box-arrow-right text-orange"></i>
                {{ __('Log Out') }}
            </x-ui.dropdown.dropdown-link>
        </form>
    </x-slot>
</x-ui.dropdown.dropdown>
