<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addwish($userId, $prodId){
        $wishItem = new Wishlist;
        $wishItem->user_id = $userId;
        $wishItem->product_id = $prodId;
        $wishItem->save();
        return back();
    }

    public function showWishlist(){
        //TODO:  A wishlist view page

        $wishitems = Wishlist::where('user_id',"=", Auth::user()->id);
        //echo($wishitems->lazy());
        $prodList = $wishitems;






        return view('frontend.page.wishlist', compact('prodList'));
    }
}
