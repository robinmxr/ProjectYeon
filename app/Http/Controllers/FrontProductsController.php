<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class FrontProductsController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('page.product.index')->with('products',$products);
    }
}
