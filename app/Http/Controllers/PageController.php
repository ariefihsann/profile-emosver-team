<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function about(): View
    {
        return view('about');
    }

    public function gallery(): View
    {
        return view('gallery');
    }

    public function contact(): View
    {
        return view('tech');
    }
}
