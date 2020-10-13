<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class TotalProducts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalProducts;
    public function __construct()
    {
        $this->totalProducts = Product::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-products');
    }
}
