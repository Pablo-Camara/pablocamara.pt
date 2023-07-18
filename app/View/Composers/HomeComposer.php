<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class HomeComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $hasAnimatedMainMenuOnce = Cookie::get('has-animated-main-menu-once', 0);
        $view->with('hasAnimatedMainMenuOnce', $hasAnimatedMainMenuOnce);
    }
}
