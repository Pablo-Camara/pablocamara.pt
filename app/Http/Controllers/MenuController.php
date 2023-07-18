<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class MenuController extends Controller
{
    public function hasAnimatedMainMenuOnce(Request $request)
    {
        $threeDaysInMinutes = (24 * 60) * 3;
        $cookie = cookie('has-animated-main-menu-once', true, $threeDaysInMinutes);

        $response = new Response('has-animated-main-menu-once-cookie-set');
        $response->withCookie($cookie);

        return $response;
    }
}
