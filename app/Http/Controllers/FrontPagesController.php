<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;


use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



            $orderlist = Order::where('user_id', Auth::user()->id)->get();
            $review = ProductReview::where('user_id', Auth::user()->id)->get();
            $flag = 0;
            if(isset(Auth::user()->image[0]->image)){
                $flag = 1;
            }




        return view('frontend.page.profile', compact('orderlist','review','flag'));
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
