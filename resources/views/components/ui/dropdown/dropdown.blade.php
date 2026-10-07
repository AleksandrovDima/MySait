@props([
    'trigger',
    'content',
    'id' => 'navbarDropdown',
])

<li class="nav-item dropdown">
    <a id="{{ $id }}" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle text-orange"></i>
        <span class="link-orange">
            {{ $trigger }}
            <i class="bi bi-chevron-down ms-1"></i>
        </span>
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        {{ $content }}
    </div>
</li>
