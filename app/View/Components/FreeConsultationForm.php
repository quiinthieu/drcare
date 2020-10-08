<?php

namespace App\View\Components;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\View\Component;

class FreeConsultationForm extends Component
{
    public $serviceTypes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->serviceTypes = ServiceType::all();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.free-consultation-form');
    }
}
