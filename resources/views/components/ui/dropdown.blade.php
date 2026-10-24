@props([
    'id',
    'align' => 'end',
])

<div class="dropdown">
    <a 
        id="{{ $id }}" 
        {{ $attributes->merge(['class' => 'dropdown-toggle']) }}
        href="#"
        role="button" 
        data-bs-toggle="dropdown" 
        aria-expanded="false"
    >
        {{ $trigger }}
    </a>

    <div 
        @class([
            'dropdown-menu',
            'dropdown-menu-start' => $align === 'start',
            'dropdown-menu-end' => $align !== 'start',
        ]) 
        aria-labelledby="{{ $id }}"
    >
        {{ $content }}
    </div>
</div>
