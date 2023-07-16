<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(trans('routes.language-selection'), function () {
    return view('language-selection');
})->name('language-selection');

$supportedLanguages = config('app.supported_languages');
foreach ($supportedLanguages as $language) {
    Route::get($language, function () {
        return view('home');
    });

    Route::get($language . '/' . trans('routes.about-me', [], $language), function () {
        return view('about-me');
    });
}
