<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $icon, $text, $active, $alert, $link;
    public function __construct($icon, $text, $active = false, $alert, $link = "home")
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->active = $active;
        $this->alert = $alert;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-item');
    }
}
