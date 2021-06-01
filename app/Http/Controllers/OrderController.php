<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductOrders;

class OrderController extends Controller
{
    public function index()
    {
        $orders = ProductOrders::orderBy('id', 'desc')->get();

    }
}
