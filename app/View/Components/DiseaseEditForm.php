<?php

namespace App\View\Components;

use App\Models\Disease;
use Illuminate\View\Component;

class DiseaseEditForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $disease;
    public function __construct($id)
    {
        $this->disease = Disease::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.disease-edit-form');
    }
}
