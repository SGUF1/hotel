<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $name, $number, $icon, $color;

    public function __construct($name, $number, $icon, $color = "bg-white")
    {
        $this->name = $name;
        $this->number = $number;
        $this->icon = $icon;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-card');
    }
}
