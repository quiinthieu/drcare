<?php

namespace App\View\Components;

use App\Models\Appointment;
use Illuminate\View\Component;

class TotalAppointments extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalAppointments;
    public function __construct()
    {
        $this->totalAppointments = Appointment::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-appointments');
    }
}
