<x-layouts.inner
    :title="__('Register')"
>

    <div class="mb-4 text-muted">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if(session('status'))
        <x-panels.messages.success class="mb-4" :messages="[__('A new verification link has been sent to the email address you provided during registration.') ]" />
    @endif

    <div class="d-flex align-items-center justify-content-between mt-4">
        <x-forms.form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="d-flex align-items-center gap-3">
                <x-forms.buttons.submit-button>
                    {{ __('Resend Verification Email') }}
                </x-forms.buttons.submit-button>
            </div>
        </x-forms.form>

        <x-forms.form method="POST" action="{{ route('logout') }}">
            @csrf

            <div class="d-flex align-items-center gap-3">
                <x-forms.buttons.secondary-submit-button>
                    {{ __('Log Out') }}
                </x-forms.buttons.secondary-submit-button>
            </div>
        </x-forms.form>
    </div>

</x-layouts.inner>
