<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $trigger = null,
        public $label   = 'Modal',
        public $class   = null
    )
    {
        $this->trigger = $trigger;
        $this->label   = $label;
        $this->class   = $class ? ' '. $class : null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
