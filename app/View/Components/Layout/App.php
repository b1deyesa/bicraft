<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title = null
    )
    {
        $this->title = $title ? env('APP_NAME') .' - '. $title : env('APP_NAME');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.app');
    }
}
