<?php

namespace App\View\Components;

use App\Models\Doctor;
use Illuminate\View\Component;

class TotalDoctors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalDoctors;
    public function __construct()
    {
        $this->totalDoctors = Doctor::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-doctors');
    }
}
