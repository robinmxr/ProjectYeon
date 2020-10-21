<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontPagesController extends Controller
{

    public function index()
    {
        return view('page.index');
    }
    public function contact()
    {
        return view('page.contact');
    }

    public function cart()
    {
        return view('page.cart');
    }

}
