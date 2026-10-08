@props([
    'errorBag' => 'default'
])

<form method="post" action="{{ route('profile.destroy') }}" class="p-6">
    @csrf
    @method('delete')

    <h2 class="h5">
        {{ __('Are you sure you want to delete your account?') }}
    </h2>

    <p class="mt-1 text-sm text-muted mb-3">
        <small>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </small>
    </p>

    <x-forms.fields.password 
        :error-bag="$errorBag" 
        id="delete_user_password"
    />

    <x-forms.actions class="mt-3 justify-content-end">
        <x-forms.buttons.secondary-button 
            type="button"
            onclick="this.closest('dialog').close()"
        >
            {{ __('Cancel') }}
        </x-forms.buttons.secondary-button>

        <x-forms.buttons.danger-button class="ms-3">
            {{ __('Delete Account') }}
        </x-forms.buttons.danger-button>
    </x-forms.actions>
</form>