<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $lengthChange;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $head    = null,
        public $body    = null,
        public $id      = null,
        public $perPage = 10,
    )
    {
        $this->head    = $head;
        $this->body    = $body;
        $this->id      = $id;
        $this->perPage = $perPage;
        
        if ($this->perPage !== 10) {
            $this->lengthChange = false;
        } else {
            $this->lengthChange = true;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
