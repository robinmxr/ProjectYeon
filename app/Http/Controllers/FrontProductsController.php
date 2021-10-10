<?php

namespace App\Http\Controllers;


use App\Models\ProductReview;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use Auth;

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
        $review = ProductReview::where('product_id',$product->id)->get();
        $related= Product::where('category_id', '=', $product->category->id)->where('id', '!=', $product->id)->get();
        return view('frontend.page.product.view',compact('product','related','review'));
    }
    public function addtocart(Request $request){
    $product = Product::find($request->id);
    Cart::add(uniqid(), $product->title, $product->price, $request->quantity, array(
        'size' => $request->size,
        'image' => $product->image[0]->image));

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

