<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResearchListing extends Component
{
    public $results;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($results)
    {
        $this->results = $results;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.research-listing');
    }
}
