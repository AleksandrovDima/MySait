@props([
    'icon' => null,
])

<button 
    type="button"
    {{ $attributes->merge(['class' => 'btn btn-link text-gray link-base d-inline-flex align-items-center gap-1 p-0']) }}
>
    @if($icon)
        <i class="{{ $icon }} text-base" aria-hidden="true"></i>
    @endif
    {{ $slot }}
</button>