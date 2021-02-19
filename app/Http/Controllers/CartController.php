<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    public function getCart()
    {
        return view('frontend.page.cart');
    }
    public function removeItem($id)
    {
        Cart::remove($id);

        if (Cart::isEmpty()) {
            return redirect('/');
        }
        session()->flash('success','Removed from Cart');
        return back();
    }
    public function clearCart()
    {
        Cart::clear();

        return redirect('/');
    }
}
