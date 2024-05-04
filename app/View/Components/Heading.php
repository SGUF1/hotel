<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    /**
     * Create a new component instance.
     */

    public $name, $desc, $icon, $new, $new2, $newHref, $new2Href;
    public function __construct($name, $desc, $icon, $new = null, $new2 = null, $new2Href = null, $newHref = null)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->icon = $icon;
        $this->new = $new;
        $this->newHref = $newHref;
        $this->new2 = $new2;
        $this->new2Href = $new2Href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading');
    }
}
