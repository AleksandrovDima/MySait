@props([
    'errors' => [],
    'for'
])

<div class="mb-3">
    <x-forms.groups.label for="{{ $for }}">{{ $label }}</x-forms.groups.label>

    {{ $slot }}
    
    @if (!empty($errors))
        <x-forms.groups.error :messages="$errors" />
    @endif
</div>
    