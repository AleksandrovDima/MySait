@props([
    'icon' => null,
])

<button 
    type="button"
    {{ $attributes->merge(['class' => 'btn btn-link text-gray link-orange d-inline-flex align-items-center gap-1 p-0']) }}
>
    @if($icon)
        <i class="{{ $icon }} text-orange" aria-hidden="true"></i>
    @endif
    {{ $slot }}
</button>