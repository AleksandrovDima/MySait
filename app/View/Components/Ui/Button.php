<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public readonly string $classes;

    public function __construct(
        public readonly string $type = 'button',
        public readonly string $variant = 'primary',
    ) {
        $this->classes = match($this->variant) {
            'danger' => 'btn btn-danger',
            'secondary' => 'btn btn-outline-secondary',
            default => 'btn btn-base text-white fw-bold px-4',
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.ui.button');
    }
}
