@props([
    'href' => '#',
    'icon' => null,
])

<a 
    href="{{ $href }}" 
    {{ $attributes->merge(['class' => 'dropdown-item d-flex align-items-center gap-2 link-base']) }}
>
    @if($icon)
        <i class="{{ $icon }} text-base" aria-hidden="true"></i>
    @endif
    {{ $slot }}
</a>