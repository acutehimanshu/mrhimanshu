<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function landingPage(Request $request)
    {
        return view("profile.landingPage");
    }

    function about(Request $request)
    {
        return view("profile.about");
    }

    function contact(Request $request)
    {
        return view("profile.contact");
    }

    function portfolio(Request $request)
    {
        return view("profile.portfolio");
    }
}
