<x-forms.groups.group for="$id" :errors="$passwordErrors">
    <x-slot:label>{{ $passwordLabel }}</x-slot:label>

    <x-forms.inputs.text
        :id="$id"
        name="password"
        type="password"
        :autofocus="$autofocus"
        :autocomplete="$autocomplete"
        required
        placeholder="********"
        value="{{ old('password') }}"
        :has-error="!empty($passwordErrors)"
    />
</x-forms.groups.group>

@if($withConfirmation)
    <x-forms.groups.group for="password_confirmation" :errors="$passwordConfirmationErrors">
        <x-slot:label>{{ $passwordConfirmationLabel }}</x-slot:label>

        <x-forms.inputs.text
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            autocomplete="new-password"
            required
            placeholder="********"
            value="{{ old('password_confirmation') }}"
            :has-error="!empty($passwordConfirmationErrors)"
        />
    </x-forms.groups.group>
@endif