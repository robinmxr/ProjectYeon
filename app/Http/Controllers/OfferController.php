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
    public function addoffer(Request $request,$id)
    {

        $product = Product::find($id);
        if($request->offer_id != 0)
        {
            $offer = Offer::find($request->offer_id);
            $product->offer_id = $request->offer_id;
            $product->offer_price = $product->price - (($product->price * $offer->percentage ) / 100 );
            $product->save();


        }
        else
        {
            $product->offer_id = 0;
            $product->offer_price = 0;
            $product->save();
        }
        session()->flash('success','Offer has been added to the product');
        return back();

    }
    public function showoffer($id)
    {
        $product = Product::find($id);
        $offers = Offer::all();
        return view('admin.page.product.addoffer',compact('product','offers'));
    }
}
