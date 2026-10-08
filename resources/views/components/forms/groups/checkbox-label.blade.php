@props(['for' => null])

<label 
    @if($for) for="{{ $for }}" @endif 
    {{ $attributes->merge(['class' => 'form-check-label']) }}
>
    {{ $slot }}
</label>
