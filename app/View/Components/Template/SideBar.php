<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     */
    public array $listMenu;

    public function __construct()
    {
        $menuJson = file_get_contents(base_path('resources/libs/menu.json'));
        $menutoArr = json_decode($menuJson, true);
        $this->listMenu = $menutoArr['menus'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.side-bar');
    }
}
