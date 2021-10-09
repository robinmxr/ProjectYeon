<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function allorder()
{
    $id = Auth::user()->id;
    $orders = Order::where('user_id',$id)->get();
    return view('frontend.page.order.all',compact('orders'));
}
}
