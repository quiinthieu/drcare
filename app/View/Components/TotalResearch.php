<?php

namespace App\View\Components;

use App\Models\Research;
use Illuminate\View\Component;

class TotalResearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalResearch;
    public function __construct()
    {
        $this->totalResearch = Research::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-research');
    }
}
