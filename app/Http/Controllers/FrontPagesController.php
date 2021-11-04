<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;


use App\Models\ProductReview;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontPagesController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(20);
        $featured = Product::where('featured','true')->get();
        return view('frontend.page.index',compact('products','featured'));
    }
    public function contact()
    {
        return view('frontend.page.contact');
    }
    public function profile()
    {



            $orderlist = Order::where('user_id', Auth::user()->id)->get();
            $review = ProductReview::where('user_id', Auth::user()->id)->get();
            $flag = 0;
            if(isset(Auth::user()->image[0]->image)){
                $flag = 1;
            }




        return view('frontend.page.profile', compact('orderlist','review','flag'));
    }

    public function cart()
    {
        return view('frontend.page.cart');
    }
    public function about()
    {
        return view('frontend.page.about');
    }
    public function faq()
    {
        return view('frontend.page.faq');
    }
    public function terms()
    {
        return view('frontend.page.terms');
    }



    public function addtoWishlist(Request $request)
    {



            $id = Auth::user()->id;
            $prodId = $request->productId;
            if(!Wishlist::where(['user_id'=> $id, 'product_id'=>$prodId])->count() > 0){
                return $this->addwish($id, $prodId);
            }
            else{
                return;
            }



    }

    public function addwish($userId, $prodId){
        $wishItem = new Wishlist;
        $wishItem->user_id = $userId;
        $wishItem->product_id = $prodId;
        $wishItem->save();
        return back();
    }


}
