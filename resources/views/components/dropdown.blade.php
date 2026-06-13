@props(['trigger', 'content'])
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
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
