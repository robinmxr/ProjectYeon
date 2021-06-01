<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrders;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function showCheckout()
    {
        return view('frontend.page.checkout');
    }
    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->name = $request->name;
        $order->country = $request->country;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->phone_number = $request->phone_number;
        $order->total = Cart::getSubTotal();
        $order->save();

        if ($order) {

            $items = Cart::getContent();

            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('title', $item->name)->first();

                $productorder = new ProductOrders([
                    'product_id'    =>  $product->id,
                    'quantity'      =>  $item->quantity,

                ]);

                $order->product()->save($productorder);
            }
        }


        session()->flash('success','Order Has been placed');
        return back();



    }
}
