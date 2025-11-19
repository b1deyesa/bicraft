<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Property extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $category = 'Category',
        public $title    = 'Title',
        public $tokens   = false
    )
    {
        $this->category = $category;
        $this->title    = $title;
        $this->tokens   = $tokens;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.property');
    }
}
