@props([
    'name' => null,
    'autofocus' => false,
    'autocomplete' => 'name',
])

<x-forms.groups.group for="name" :errors="$errors->get('name')">
    <x-slot:label>{{ __('Name') }}</x-slot:label>
    <x-forms.inputs.text
        id="name"
        name="name"
        type="name"
        :autofocus="$autofocus"
        :autocomplete="$autocomplete"
        required
        :placeholder="__('Ivan Ivanych')"
        value="{{ old('name', $name ?? '') }}"
        :has-error="$errors->has('name')"
    />
</x-forms.groups.group>