<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name, $placeholder, $type, $label, $value;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $placeholder = "", $label = null, $value = "")
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
