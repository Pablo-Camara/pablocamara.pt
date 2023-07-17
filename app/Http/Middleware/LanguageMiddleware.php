<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLanguages = config('app.supported_languages');
        $languageCode = $request->segment(1);
        $fallbackLanguage = 'en';

        if (!in_array($languageCode, $supportedLanguages)) {
            $languageCode = $fallbackLanguage;
        }
        // 3 days in minutes
        $threeDaysInMinutes = (24*60)*3;
        Cookie::queue('selected-language', $languageCode, $threeDaysInMinutes);
        app()->setLocale($languageCode);

        return $next($request);
    }
}
