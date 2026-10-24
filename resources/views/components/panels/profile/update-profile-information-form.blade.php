@props(['user'])

<form method="post" action="{{ route('profile.update') }}" class="mt-4">
    @csrf
    @method('patch')

    <x-forms.concrete-forms-fields.fields.name name="{{ $user->name ?? '' }}"/>

    <x-forms.concrete-forms-fields.fields.email email="{{ $user->email ?? '' }}"/>

    <x-forms.actions>
        <x-ui.button type="submit" variant="primary">
            {{ __('Save') }}
        </x-ui.button>

        @if (session('status') === 'profile-updated')
            <p class="status-message text-orange mb-0 fade-out">
                {{ __('Saved.') }}
            </p>
        @endif
    </x-forms.actions>
</form>
