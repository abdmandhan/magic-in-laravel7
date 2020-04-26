<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideContent extends Component
{
    public $name, $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $active = null)
    {
        $this->name     = $name;
        $this->active   = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.side-content');
    }
}
