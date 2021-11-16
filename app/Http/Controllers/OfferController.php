<?php

namespace App\Http\Controllers;

use App\Models\Offer;
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
}
