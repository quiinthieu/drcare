<?php

namespace App\View\Components;

use App\Models\Research;
use Illuminate\View\Component;

class RecentResearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $articles;
    public function __construct()
    {
        $this->articles = Research::all()->sortByDesc('published_at')->take(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.recent-research');
    }
}
