<?php

namespace App\View\Components;

use App\Models\Role;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RolesTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $roles;
    public function __construct($roles)
    {
        $jsonRoles = json_decode($roles);
        // $this->roles = array_map(function ($roleData) {
        //     return new Role($roleData);
        // }, $jsonRoles);

        $this->roles = $jsonRoles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.roles-table');
    }
}
