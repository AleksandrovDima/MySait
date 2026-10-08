@props([
    'email' => null,
    'autofocus' => false,
    'autocomplete' => 'email',
])

<x-forms.groups.group for="email" :errors="$errors->get('email')">
    <x-slot:label>{{ __('Email') }}</x-slot:label>

    <x-forms.inputs.text
        id="email"
        name="email"
        type="email"
        :autofocus="$autofocus"
        :autocomplete="$autocomplete"
        required
        placeholder="example@example.com"
        value="{{ old('email', $email ?? '') }}"
        :has-error="$errors->has('email')"
    />
</x-forms.groups.group>
