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
            <x-forms.buttons.submit-button>
                {{ __('Log in') }}
            </x-forms.buttons.submit-button>
            @if (Route::has('password.request'))
                <a class="text-gray" href="{{ route('password.request') }}">
                    <span class="link-orange">
                        {{ __('Forgot your password?') }}
                    </span>
                </a>
            @endif
        </x-forms.actions>
    </x-forms.form>
</x-layouts.inner>
