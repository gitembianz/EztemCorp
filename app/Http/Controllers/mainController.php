<?php

namespace App\Http\Controllers;


class mainController extends Controller
{
    public function changeLocale($locale)
    {
        session()->put('locale', $locale);
        $previousUrl = url()->previous();
        $parsedUrl = parse_url($previousUrl);
        $path = $parsedUrl['path'];
        $queryParams = $parsedUrl['query'] ?? '';
        if ($queryParams) {
            parse_str($queryParams, $queryParamsArray);
            $queryParamsArray['locale'] = $locale;
            $newQueryParams = http_build_query($queryParamsArray);
            $newUrl = $path . '?' . $newQueryParams;
        } else {
            $newUrl = $path;
        }
        return redirect($newUrl);
    }
}