<?php

namespace App\Http\Controllers;


class mainController extends Controller
{
    //
    public function changeLocale($locale)
    {
        // Store the chosen locale in the session
        session()->put('locale', $locale);

        // Get the current URL path without the query parameters
        $pathWithoutQueryParams = parse_url(url()->previous(), PHP_URL_PATH);

        // Build the new URL with the locale parameter
        $newUrl = url($pathWithoutQueryParams);
        // Redirect back to the previous page with the updated locale parameter
        return redirect($newUrl);
    }
}
