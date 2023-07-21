<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\LanguageMiddleware;
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

$supportedLanguages = config('app.supported_languages');

Route::get(trans('routes.language-selection'), function () use ($supportedLanguages) {
    $selectedLanguage = request()->cookie('selected-language');
    if (
        false == request()->has('lang')
        &&
        !empty($selectedLanguage)
        &&
        in_array($selectedLanguage, $supportedLanguages)
    ) {
        return redirect()->route(trans('routes.home', [], $selectedLanguage));
    }
    return view('language-selection');
})->name('language-selection');

Route::middleware([LanguageMiddleware::class])->group(function () use ($supportedLanguages) {
    foreach ($supportedLanguages as $language) {
        Route::get($language, [HomeController::class, 'homePage'])
            ->name(trans('routes.home', [], $language));

        Route::get($language . '/' . trans('routes.about-me', [], $language), function () {
            return view('about-me');
        })->name(trans('routes.about-me', [], $language));

        Route::get($language . '/' . trans('routes.projects', [], $language), function () {
            return view('projects');
        })->name(trans('routes.projects', [], $language));

        Route::get($language . '/' . trans('routes.contact', [], $language), [ContactController::class, 'index'])
            ->name(trans('routes.contact', [], $language));
    }
});
