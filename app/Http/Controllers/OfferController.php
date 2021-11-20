<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create()
    {
        return view('admin.page.offer.add');
    }
    public function store(Request $request)
    {
        $offer = new Offer;
        $offer->title = $request->title;
        $offer->percentage = $request->percentage;
        $offer->save();

        session()->flash('success','Offer Has been Added');
        return back();
    }
    public function show()
    {
        $offers = Offer::get();
        return view('admin.page.offer.all',compact('offers'));
    }
    public function delete($id)
    {
        $offer=Offer::find($id);
        if(!is_null($offer)){
            $offer->delete();
        }
        session()->flash('success','Offer has been deleted');
        return back();
    }
    public function addoffer($id,Request $request)
    {

        $product = Product::find($id);
        if($request->offer_id != null)
        {
            $offer = Offer::find($request->offer_id);
            $product->offer_id = $request->offer_id;
            $product->offer_price = $product->price - (($product->price * $offer->percentage ) / 100 );


        }
        else
        {
            $product->offer_id = null;
            $product->offer_price = null;
        }
    }
}
