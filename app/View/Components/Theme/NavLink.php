<?php

namespace App\View\Components\Theme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public string $link, public string $icon)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.nav-link');
    }
}
