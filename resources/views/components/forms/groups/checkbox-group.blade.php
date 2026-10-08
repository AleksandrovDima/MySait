@props([
    'for' => null,
    'errors' => [],
])

<div class="mb-3">
    <div class="form-check">
        {{ $slot }}

        <x-forms.groups.checkbox-label :for="$for">
            {{ $label }}
        </x-forms.groups.checkbox-label>
    </div>
    
    @if (!empty($errors))
        <x-forms.groups.error :messages="$errors" />
    @endif
</div>
