<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addwish(Request $request){
        $cwu_wishlist = Wishlist::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $request->productId)->first();
        if(isset($cwu_wishlist))
        {
            session()->flash('success','Wishlist Item is already added.');
        }
        else{
            $wishItem = new Wishlist;
            $wishItem->user_id = Auth::user()->id;
            $wishItem->product_id = $request->productId;
            $wishItem->save();
            session()->flash('success','Wishlist Item is added.');
        }


        return back();
    }

    public function showWishlist(){


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


    public function removeWLbyid($id){
        $wishitem=Wishlist::where('product_id','=',$id)->where('user_id',"=", Auth::user()->id)->get();
        foreach ($wishitem as $w){
            if(!is_null($w)){
                $w->delete();
            }
        }

        session()->flash('success','Wishlist Item has been deleted');
        return back();

    }
}
