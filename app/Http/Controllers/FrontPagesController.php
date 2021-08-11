<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class FrontPagesController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(20);
        return view('frontend.page.index',compact('products'));
    }
    public function contact()
    {
        return view('frontend.page.contact');
    }
    public function profile()
    {
        return view('frontend.page.profile');
    }

    public function cart()
    {
        return view('frontend.page.cart');
    }
    public function cartd()
    {
        return view('frontend.page.cartdemo');
    }


}
