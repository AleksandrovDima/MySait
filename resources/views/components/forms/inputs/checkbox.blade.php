@props([
    'id' => null,
    'checked' => false,
    'hasError' => null,
])

<input
    type="checkbox"
    value="1"
    @if($id) id="{{ $id }}" @endif
    @class([
        'form-check-input',
        'is-invalid' => $hasError,
        $attributes->get('class')
    ])
    {{ $attributes->except(['class', 'type', 'checked']) }}
    @checked($checked)
>
