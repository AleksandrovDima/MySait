<li class="nav-item">
    @if (Route::has('register'))
        <a class="nav-link text-gray link-orange d-inline-flex align-items-center gap-1" href="{{ route('register') }}">
            <i class="bi bi-person-fill text-orange"></i>
            <span>{{ __('Register') }}</span>
        </a>
    @endif
</li>
<li class="nav-item">
    <a class="nav-link text-gray link-orange d-inline-flex align-items-center gap-1" href="{{ route('login') }}">
        <i class="bi bi-lock-fill text-orange"></i>
        <span>{{ __('Authorization') }}</span>
    </a>
</li>
