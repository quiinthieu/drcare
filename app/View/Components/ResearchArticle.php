<?php

namespace App\View\Components;

use App\Models\Research;
use Illuminate\View\Component;

class ResearchArticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $article;
    public function __construct($id)
    {
        $this->article = Research::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.research-article');
    }
}
