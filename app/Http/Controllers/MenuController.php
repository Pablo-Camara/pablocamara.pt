<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MenuController extends Controller
{
    public function hasAnimatedMainMenuOnce (Request $request) {
        $threeDaysInMinutes = (24*60)*3;
        Cookie::queue('has-animated-main-menu-once', true, $threeDaysInMinutes);
    }
}
