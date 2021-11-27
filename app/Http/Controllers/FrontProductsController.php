<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use App\Models\ProductReview;
use App\Models\ProductSize;
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
        return view('frontend.page.product.index',compact('products'));
    }
    public function viewbytag($tag)
    {
        $products = Product::where('tag',$tag)->paginate(16);
        return view('frontend.page.product.index',compact('products'));
    }
    public function viewbycat($id)
    {
        $products = Product::where('category_id',$id)->paginate(16);
        return view('frontend.page.product.index',compact('products'));
    }
    public function viewproduct($id,$slug)
    {
        $product = Product::find($id);
        $review = ProductReview::where('product_id',$product->id)->get();
        $size = ProductSize::where('product_id', $product->id)->get();
        $related= Product::where('category_id', '=', $product->category->id)->where('id', '!=', $product->id)->get();
        return view('frontend.page.product.view',compact('product','related','review','size'));

    }
    public function addtocart(Request $request){
    $product = Product::find($request->id);
    $offerid = Offer::find($product->offer_id);


    if(isset($offerid)){

        $price = $product->price - $product->price * $offerid->percentage/100;
        Cart::add(uniqid(), $product->title, $price, $request->quantity, array(
            'size' => $request->size,
            'image' => $product->image[0]->image,
            'offerpercent' => $offerid->percentage,
                'oldprice' => $product->price)

        );

    }
    else {
        Cart::add(uniqid(), $product->title, $product->price, $request->quantity, array(
            'size' => $request->size,
            'image' => $product->image[0]->image));

    }


        session()->flash('success','Added to cart');
        return back();
    }
    public function search(Request $request){
        $searchkey = $request->input('name');
        $data = Product::orWhere('title', 'LIKE', '%'.$searchkey.'%')
            ->orWhere('description', 'LIKE', '%'.$searchkey.'%')
            ->orWhere('material', 'LIKE', '%'.$searchkey.'%')
            ->orWhere('color', 'LIKE', '%'.$searchkey.'%')
            ->paginate(16);

        return view('frontend.page.search',compact('searchkey', 'data'));

    }
}

