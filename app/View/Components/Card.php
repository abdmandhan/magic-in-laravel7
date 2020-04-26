<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title, $modalId, $buttonText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $modalId = null, $buttonText = null)
    {
        $this->title        = $title;
        $this->modalId      = $modalId;
        $this->buttonText   = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
