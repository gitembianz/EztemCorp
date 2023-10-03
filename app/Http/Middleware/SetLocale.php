<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $localeFromUrl = $request->query('locale');
        if (in_array($localeFromUrl, ['en', 'ro'])) {
            App::setLocale($localeFromUrl);
            session()->put('locale', $localeFromUrl);
        } elseif (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale('en');
        }
        URL::defaults(['locale' => 'en']);
        return $next($request);
    }
}