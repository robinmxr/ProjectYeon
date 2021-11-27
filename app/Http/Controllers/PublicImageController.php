<?php

namespace App\Http\Controllers;

use App\Models\PublicImage;
use Illuminate\Http\Request;
use Image;

class PublicImageController extends Controller
{
    public function addimage()
    {
        return view('admin.page.image.addimage');
    }
    public function storeimage(Request $request)
    {
        $image = new PublicImage;
        $img = $request->image;
        $final_image= Image::make($img)->resize(1080, 720, function ($constraint) {
            $constraint->aspectRatio();
        });
        $originalpath=public_path().'/images/cover/';
        $final_image->save('images/cover/'.$img->getClientOriginalName());
        $image->image = $img->getClientOriginalName();
        $image->save();

        session()->flash('success','Cover Image has been Added');
        return back();
    }
    public function showimage()
    {
        $images = PublicImage::all();
        return view('admin.page.image.gallery',compact('images'));
    }
    public function deleteimage($id)
    {
        $image = PublicImage::find($id);
        $image->delete();
        session()->flash('success','Cover Image has been Deleted');
        return back();
    }
}
