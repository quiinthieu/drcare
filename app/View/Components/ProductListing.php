<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductListing extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $products;
    public function __construct($id)
    {
        $this->products = Product::all()->where('category_id', $id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-listing');
    }
}
