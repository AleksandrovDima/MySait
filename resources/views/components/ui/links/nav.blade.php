@props([
    'href' => '#',
    'icon' => null,
])

<a 
    href="{{ $href }}" 
    {{ $attributes->merge(['class' => 'nav-link text-gray link-base d-inline-flex align-items-center gap-1']) }}
>
    @if($icon)
        <i class="{{ $icon }} text-base" aria-hidden="true"></i>
    @endif
    <span>{{ $slot }}</span>
</a>
