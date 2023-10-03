<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class UrlServiceProvider extends ServiceProvider
{
    public function register()
    {
        URL::macro('localized', function ($url, $locale = null) {
            $locale = $locale ?: app()->getLocale();
            // Append the locale as a query parameter
            return URL::to($url) . '?locale=' . $locale;
        });
    }
}