<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $localeFromUrl = $request->query('locale');

        if (in_array($localeFromUrl, ['en', 'ro'])) {
            App::setLocale($localeFromUrl);
        } elseif (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale('en');
        }

        return $next($request);
    }
}
