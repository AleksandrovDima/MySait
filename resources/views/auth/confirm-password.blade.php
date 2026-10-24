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
            <x-ui.button type="submit" variant="primary">
                {{ __('Confirm') }}
            </x-ui.button>
        </div>
    </x-forms.form>
</x-layouts.inner>
