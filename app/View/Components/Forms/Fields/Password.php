<?php

namespace App\View\Components\Forms\Fields;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\MessageBag;

class Password extends Component
{
    public array $passwordErrors = [];
    public array $passwordConfirmationErrors = [];

    public function __construct(
        public string $id = 'password',
        public bool $withConfirmation = false,
        public string $passwordLabel = '',
        public string $passwordConfirmationLabel = '',
        public string $autocomplete = 'current-password',
        public bool $autofocus = false,
        public string $errorBag = 'default',
    ) {
        $this->passwordLabel = $passwordLabel ?: __('Password');
        $this->passwordConfirmationLabel = $passwordConfirmationLabel ?: __('Confirm Password');
    }

    public function render(): View|Closure|string
    {
        $bag = $this->getErrorBag();

        $this->passwordErrors = $bag->get('password');
        $this->passwordConfirmationErrors = $bag->get('password_confirmation');
        
        return view('components.forms.concrete-forms-fields.fields.password');
    }

    protected function getErrorBag()
    {
        $errors = session()->get('errors') ?: view()->shared('errors');
        
        if (!$errors) {
            return new MessageBag();
        }
        
        if ($this->errorBag !== 'default') {
            return $errors->{$this->errorBag} ?? new MessageBag();
        }
        
        return $errors->default;
    }
}
