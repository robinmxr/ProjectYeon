<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addwish(Request $request){
        $wishItem = new Wishlist;
        $wishItem->user_id = Auth::user()->id;
        $wishItem->product_id = $request->productId;
        $wishItem->save();
        return back();
    }

    public function showWishlist(){
        //TODO:  A wishlist view page

        $wishitems = Wishlist::where('user_id',"=", Auth::user()->id)->get();
        //echo($wishitems);
        $prodList = collect();
        foreach($wishitems as $wishitem){
            $item = Product::find( $wishitem->product_id);
            $prodList = $prodList->concat([$item]) ;
        }
        //$prodList = $wishitems;

        return view('frontend.page.wishlist', compact('prodList'));
    }
}
