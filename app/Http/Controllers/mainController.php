<?php

namespace App\Http\Controllers;


class mainController extends Controller
{
    public function changeLocale($locale)
    {
        session()->put('locale', $locale);
        $pathWithoutQueryParams = parse_url(url()->previous(), PHP_URL_PATH);
        $newUrl = url($pathWithoutQueryParams);
        return redirect($newUrl);
    }
}
