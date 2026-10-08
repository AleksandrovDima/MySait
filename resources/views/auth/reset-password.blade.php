<x-layouts.inner
    :title="__('Reset Password')"
>

    <x-forms.form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-forms.concrete-forms-fields.fields.email :autofocus="true"/>

        <x-forms.fields.password 
            :with-confirmation="true"
            autocomplete="new-password"
            error-bag="updatePassword"
            password-label="{{ __('New Password') }}"
            password-confirmation-label="{{ __('Confirm Password') }}"
        />

        <div class="d-flex align-items-center gap-3">
            <x-forms.buttons.submit-button>
                {{ __('Reset Password') }}
            </x-forms.buttons.submit-button>
        </div>
    </x-forms.form>
</x-layouts.inner>
