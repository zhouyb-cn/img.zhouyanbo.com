<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // return redirect('/contact');
        return view('index', ['page' => 'index']);
    }

    public function about()
    {
        return view('about', ['page' => 'about']);
    }

    public function contact()
    {
        return view('contact', ['page' => 'contact']);
    }
}
