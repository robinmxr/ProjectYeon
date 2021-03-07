<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontPagesController extends Controller
{

    public function index()
    {
        return view('frontend.page.index');
    }
    public function contact()
    {
        return view('frontend.page.contact');
    }

    public function cart()
    {
        return view('frontend.page.cart');
    }

}
