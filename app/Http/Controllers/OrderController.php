<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\ProductOrders;

class OrderController extends Controller
{
    public function order()
    {
        $order = Order::get();
        return view('admin.page.order.all',compact('order'));
    }
    public function orderview($id)
    {
        $order = Order::find($id);
        $productorders = ProductOrders::where('order_id',$order->id)->get();
        return view('admin.page.order.view',compact('order','productorders'));
    }
    public function changestatus(Request $request,$id)
    {
        $order=Order::find($id);
        $order->order_status = $request->status;
        $order->save();
        return back();
    }







}
