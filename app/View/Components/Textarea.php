<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label, $name, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = null)
    {
        $this->label    = $label;
        $this->name     = $name;
        $this->value    = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
