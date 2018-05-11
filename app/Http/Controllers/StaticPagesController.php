<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages.home')->with('header', 'transparent');
    }

    public function about()
    {
        return view('static_pages.about')->with('header', 'opaque');
    }

    public function help()
    {
        return view('static_pages.help')->with('header', 'transparent');
    }
}
