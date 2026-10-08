<x-layouts.inner
    :title="__('Confirm')"
>

    <div class="mb-4 text-muted">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <x-forms.form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <x-forms.fields.password :autofocus="true"/>

        <div class="d-flex align-items-center gap-3">
            <x-forms.buttons.submit-button>
                {{ __('Confirm') }}
            </x-forms.buttons.submit-button>
        </div>
    </x-forms.form>
</x-layouts.inner>
