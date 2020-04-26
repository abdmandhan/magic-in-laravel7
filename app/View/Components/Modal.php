<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $modalId, $title, $actionName, $actionId, $methodName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modalId, $title, $actionName = null, $actionId = null, $methodName = null)
    {
        $this->modalId  = $modalId;
        $this->title    = $title;
        $this->actionName   = $actionName;
        $this->actionId     = $actionId;
        $this->methodName   = $methodName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
