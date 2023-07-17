<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function homePage ()
    {
        /** @var \Illuminate\Routing\Route $currentRoute */
        $currentRoute = Route::current();

        $languageCode = $currentRoute->uri;

        // 3 days in minutes
        $threeDaysInMinutes = (24*60)*3;
        Cookie::queue('selected-language', $languageCode, $threeDaysInMinutes);
        app()->setLocale($languageCode);
        return view('home');
    }
}
