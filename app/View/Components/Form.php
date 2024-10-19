<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $method_type = null;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $action = null,
        public $method = 'GET',
        public $wire   = null
    )
    {
        $this->action = $action;
        $this->method = $method;
        $this->wire   = $wire;
        
        if ($this->method == 'PUT') {
            $this->method = 'POST';
            $this->method_type = 'PUT';
        } elseif ($this->method == 'DELETE') {
            $this->method = 'POST';
            $this->method_type = 'DELETE';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
