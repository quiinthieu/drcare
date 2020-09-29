<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DoctorListing extends Component
{
    public $doctors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($doctors)
    {
        $this->doctors = $doctors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.doctor-listing');
    }
}
