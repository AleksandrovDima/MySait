@props([
    'name',
    'show' => false,
    'maxWidth' => 'lg',
])

@php
    $maxWidthClass = [
        'sm' => 'modal-sm',
        'md' => 'modal-md',
        'lg' => 'modal-lg',
        'xl' => 'modal-xl',
    ][$maxWidth] ?? 'modal-lg';
@endphp

<dialog 
    id="{{ $name }}" 
    class="app-dialog {{ $maxWidthClass }}"
    @if($show) data-auto-show="true" @endif
>
    <div class="app-dialog-content">
        {{ $slot }}
    </div>
</dialog>
