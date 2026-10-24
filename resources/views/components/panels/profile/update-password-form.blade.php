<form method="post" action="{{ route('password.update') }}" class="mt-4">
    @csrf
    @method('put')
    
    <x-forms.groups.group for="update_password_current_password" :errors="$errors->updatePassword->get('current_password')">
        <x-slot:label>{{ __('Current Password') }}</x-slot:label>

        <x-forms.inputs.text
            id="update_password_current_password"
            name="current_password"
            type="password"
            placeholder="********"
            required
            autocomplete="current-password"
            value="{{ old('current_password') }}"
            :has-error="$errors->updatePassword->has('current_password')"
        />
    </x-forms.groups.group>

    <x-forms.fields.password 
        :with-confirmation="true"
        password-label="{{ __('New Password') }}"
        password-confirmation-label="{{ __('Confirm Password') }}"
        autocomplete="new-password"
        error-bag="updatePassword"
    />

    <x-forms.actions>
        <x-ui.button type="submit" variant="primary">
            {{ __('Save') }}
        </x-ui.button>

        @if (session('status') === 'password-updated')
            <p class="status-message text-orange mb-0 fade-out">
                {{ __('Saved.') }}
            </p>
        @endif
    </x-forms.actions>
</form>
