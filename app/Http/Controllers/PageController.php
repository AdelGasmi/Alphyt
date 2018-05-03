<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('landing.welcome')->with([
            'active'=>'home-button'
        ]);
    }


    public function about()
    {
        return view('landing.about')->with([
            'active'=>'about-button'
        ]);
    }

    public function products()
    {
        return view('landing.products')->with([
            'active'=>'products-button',
            'products'=>Product::paginate(10)
        ]);
    }
}
