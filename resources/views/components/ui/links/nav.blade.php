@props([
    'href' => '#',
    'icon' => null,
])

<a 
    href="{{ $href }}" 
    {{ $attributes->merge(['class' => 'nav-link text-gray link-orange d-inline-flex align-items-center gap-1']) }}
>
    @if($icon)
        <i class="{{ $icon }} text-orange" aria-hidden="true"></i>
    @endif
    <span>{{ $slot }}</span>
</a>
