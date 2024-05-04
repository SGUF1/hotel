<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HotelsTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $hotels;
    public function __construct($hotels)
    {
        $this->hotels = json_decode($hotels);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hotels-table');
    }
}
