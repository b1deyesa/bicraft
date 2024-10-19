<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $label       = null,
        public $required    = null,
        public $message     = null,
        public $max         = null,
        public $type        = 'text',
        public $class       = null,
        public $name        = null,
        public $id          = null,
        public $live        = null,
        public $wire        = null,
        public $prefix      = null,
        public $surfix      = null,
        public $value       = null,
        public $placeholder = null,
        public $options     = null
    )
    {
        $this->type  = $type;
        $this->class = $class ? ' '. $class : null;
        
        if (!$name) {
            if ($live) {
                $this->name = $live;
            } elseif ($wire) {
                $this->name = $wire;
            } else {
                $this->name = $name ? $name : $this->type;
            }
        } else {
            $this->name = $name ? $name : $this->type;
        }
        
        $this->id          = $id ? $this->name .'-'. $id : $this->name;
        $this->live        = $live;
        $this->wire        = $wire;
        $this->prefix      = $prefix;
        $this->surfix      = $surfix;
        $this->value       = $value;
        $this->placeholder = $placeholder;
        $this->options     = $options ? json_decode($options, true) : [];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
