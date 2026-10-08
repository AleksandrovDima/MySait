<x-layouts.inner
    :title="__('Register')"
>

    @if(session('status'))
        <x-panels.messages.success class="mb-4" :messages="(array) session('status')" />
    @endif

    <x-forms.form method="POST" action="{{ route('register') }}">
        @csrf

        <x-forms.concrete-forms-fields.fields.name :autofocus="true"/>

        <x-forms.concrete-forms-fields.fields.email />

        <x-forms.fields.password :withConfirmation="true" autocomplete="new-password"/>

        <x-forms.actions>
            <x-forms.buttons.submit-button>
                {{ __('Register') }}
            </x-forms.buttons.submit-button>
            <a class="text-gray" href="{{ route('login') }}">
                <span class="link-orange">
                    {{ __('Already registered?') }}
                </span>
            </a>
        </x-forms.actions>
    </x-forms.form>
</x-layouts.inner>
