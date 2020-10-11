<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminBreadcrumb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pageHeader;
    public function __construct($pageHeader)
    {
        $this->pageHeader = $pageHeader;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin-breadcrumb');
    }
}
