@props([
    'value' => null,
    'hasError' => false,
    'type' => 'text',
])
<input
    type="{{ $type }}"
    @class([
        'form-control',
        'is-invalid' => $hasError,
        $attributes->get('class'),
    ])
    {{ $attributes->except(['class', 'hasError', 'value', 'type']) }}
    value="{{ $value }}"
>
