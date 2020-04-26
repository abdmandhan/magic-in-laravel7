<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavSide extends Component
{
    public $nav = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nav = [])
    {
        $this->nav = $nav;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-side');
    }
}
