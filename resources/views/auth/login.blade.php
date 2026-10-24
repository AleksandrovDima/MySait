<x-layouts.inner
    :title="__('Authorization')"
>

    @if(session('status'))
        <x-panels.messages.success class="mb-4" :messages="(array) session('status')" />
    @endif

    <x-forms.form method="POST" action="{{ route('login') }}">
        @csrf

        <x-forms.concrete-forms-fields.fields.email :autofocus="true"/>

        <x-forms.fields.password />

        <x-forms.groups.checkbox-group for="remember_me" :errors="$errors->get('remember_me')">
            <x-slot:label>{{ __('Remember me') }}</x-slot:label>

            <x-forms.inputs.checkbox
                id="remember_me"
                name="remember_me"
                :checked="old('remember_me')"
                :has-error="$errors->has('remember_me')"
            />
        </x-forms.groups.checkbox-group>

        <x-forms.actions>
            <x-ui.button type="submit" variant="primary">
                {{ __('Log in') }}
            </x-ui.button>
                @if (Route::has('password.request'))
                    <x-ui.links.text :href="route('password.request')">
                        {{ __('Forgot your password?') }}
                    </x-ui.links.text>
                @endif
        </x-forms.actions>
    </x-forms.form>
</x-layouts.inner>
