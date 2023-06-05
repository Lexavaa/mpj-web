<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarOrganism extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('admin.components.organisms.sidebar');
    }
}
