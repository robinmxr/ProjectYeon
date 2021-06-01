<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class FrontProductsController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(16);
        return view('frontend.page.product.index')->with('products',$products);
    }
    public function viewproduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.page.product.view')->with('product',$product);
    }
    public function addtocart($id){
    $product = Product::find($id);
    Cart::add(uniqid(), $product->title, $product->price, $product->quantity);

        session()->flash('success','Added to cart');
        return back();
    }
    public function search(Request $request){
        $searchkey = $request->input('name');
        $data = Product::orWhere('title', 'LIKE', '%'.$searchkey.'%')
            ->orWhere('description', 'LIKE', '%'.$searchkey.'%')
            ->get();

        return view('frontend.page.search',compact('searchkey', 'data'));

    }
}

