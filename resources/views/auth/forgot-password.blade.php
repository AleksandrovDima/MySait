<x-layouts.inner
    :title="__('Password recovery')"
>

    <div class="text-muted mb-4">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if(session('status'))
        <x-panels.messages.success class="mb-4" :messages="(array) session('status')" />
    @endif

    <x-forms.form method="POST" action="{{ route('password.email') }}">
        @csrf

        <x-forms.concrete-forms-fields.fields.email :autofocus="true"/>

        <div class="d-flex align-items-center gap-3">
            <x-forms.buttons.submit-button>
                {{ __('Email Password Reset Link') }}
            </x-forms.buttons.submit-button>
        </div>
    </x-forms.form>
</x-layouts.app>
