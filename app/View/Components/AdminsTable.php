<?php

namespace App\View\Components;

use App\Models\Admin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminsTable extends Component
{
    /**
     * Create a new component instance.
     */

    public array $admins;
    public function __construct($admins)
    {

        $adminJson = json_decode($admins, true);
        $this->admins = array_map(function ($adminData) {
            return new Admin($adminData); // Assuming you have an Admin class
        }, $adminJson);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admins-table');
    }
}
