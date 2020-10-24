<?php

namespace App\View\Components;

use App\Models\Doctor;
use Illuminate\View\Component;

class DoctorListing extends Component
{
    public $doctors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->doctors = Doctor::where('status', true)->paginate(8);
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
