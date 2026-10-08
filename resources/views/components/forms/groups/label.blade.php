@props(['for'])

<label
    for="{{ $for }}"
    {{ $attributes->merge(['class' => 'text-dark form-label fw-medium']) }}
>
    {{ $slot }}
</label>
