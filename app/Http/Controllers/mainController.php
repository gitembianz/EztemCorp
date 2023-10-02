<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class mainController extends Controller
{
    //
    public function changeLocale($locale)
    {
        // Store the chosen locale in the session
        session()->put('locale', $locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
