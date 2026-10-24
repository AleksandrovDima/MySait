<x-layouts.inner
    :title="__('Profile')"
>
    <div class="row justify-content-center my-4">
        <div class="col">
            <x-panels.profile.card-parts
                id="profile-information"
                :header="__('Profile Information')"
                :description="__('Update your account\'s profile information and email address.')"
            >
                <x-panels.profile.update-profile-information-form :user="$user"/>
            </x-panels.profile.card-parts>

            <x-panels.profile.card-parts
                id="update-password"
                :header="__('Update Password')"
                :description="__('Ensure your account is using a long, random password to stay secure.')"
                class="mt-4"
            >
                <x-panels.profile.update-password-form/>
            </x-panels.profile.card-parts>

            <x-panels.profile.card-parts
                id="delete-account"
                :header="__('Delete Account')"
                :description="__('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')"
                class="mt-4"
            >
                <x-ui.button
                    type="button"
                    variant="danger"
                    class="mt-3"
                    onclick="document.getElementById('confirm-user-deletion').showModal()"
                >
                    {{ __('Delete Account') }}
                </x-ui.button>

                <x-modal 
                    name="confirm-user-deletion" 
                    :show="$errors->userDeletion->isNotEmpty()"
                >
                    <x-panels.profile.delete-user-form error-bag="userDeletion"/>
                </x-modal>
            </x-panels.profile.card-parts>
        </div>
    </div>
</x-layouts.inner>
