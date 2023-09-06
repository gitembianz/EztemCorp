<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class mainController extends Controller
{
    //
    public function changeLocale($locale)
    {
        $currentLocale = App::getLocale();
        dd($currentLocale);
    }
}
