<?php

namespace App\View\Components;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\View\Component;

class TotalServices extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalServices;
    public $serviceTypes;
    public function __construct()
    {
        $this->totalServices = Service::count();
        $this->serviceTypes = ServiceType::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-services');
    }
}
