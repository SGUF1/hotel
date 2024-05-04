<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusesTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $statuses;
    public function __construct($statuses)
    {
        $this->statuses = json_decode($statuses);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statuses-table');
    }
}
