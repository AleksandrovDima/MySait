@props(['href' => '#'])

<a 
    href="{{ $href }}" 
    {{ $attributes->merge(['class' => 'text-gray link-base']) }}
>
    {{ $slot }}
</a>