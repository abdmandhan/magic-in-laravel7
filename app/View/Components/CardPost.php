<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardPost extends Component
{
    public $title, $body, $color, $createdAt, $createdBy, $postId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body, $color, $createdAt, $createdBy, $postId)
    {
        $this->title        = $title;
        $this->body         = $body;
        $this->color        = $color;
        $this->createdAt    = $createdAt;
        $this->createdBy    = $createdBy;
        $this->postId       = $postId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-post');
    }
}
