<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;


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

        $truth =0;
        if(Order::where('user_id', Auth::user()->id)->count() >0)
        {
            $truth=1;
            $orderlist = Order::where('user_id', Auth::user()->id);

        }
        else{
            $orderlist= null;
        }
        return view('frontend.page.profile', compact('orderlist','truth'));
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
