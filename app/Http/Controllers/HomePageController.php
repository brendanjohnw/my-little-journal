<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController
{
    public static function DisplayHomePage() {
        return view('pages.welcome');
    }

    public static function RedirectToHomePage() {
        return redirect()->route('displayHomePage');
    }
}
