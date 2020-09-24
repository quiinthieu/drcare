<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public $title;
    public $subTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subTitle)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.jumbotron');
    }
}
