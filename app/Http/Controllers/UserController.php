<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\UserImage;

class UserController extends Controller
{
    public function editprofile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        session()->flash('success','Profile  has been updated');
        return back();


    }



    public function editname(Request $request)
    {
        $id = Auth::user()->id;
        $user= User::find($id);
        //echo ($request->vernamepass);
        if(Auth::attempt(array('email'=>$user->email,'password'=>$request->vernamepass))){
            $user->name = $request->name;
            $user->save();
            session()->flash('success','Profile  has been updated');
            return back();
        }
        else{
            session()->flash('failure','Profile  has not been updated');
            return back();
        }


    }



    public function changepassword(Request $request){
        $id = Auth::user()->id;
        $user= User::find($id);

        if($request->newpass != $request->connewpass){
            session()->flash('failure','Password  and Re-type Password Dont match');
            return back();
        }

        if(Auth::attempt(array('email'=>$user->email,'password'=>$request->oldpass))){
            $user->password= Hash::make($request->newpass);
            $user->save();
            session()->flash('success','Password  has been updated');
            return back();
        }
        else{
            session()->flash('failure','Password  has not been updated');
            return back();
        }
    }
    public function changephone(Request $request){
        $id = Auth::user()->id;
        $user= User::find($id);

        if(Auth::attempt(array('email'=>$user->email,'password'=>$request->phonepass))){
            $user->phone= $request->newnum;
            $user->save();
            session()->flash('success','Phone Number  has been updated');
            return back();
        }
        else{
            session()->flash('failure','Phone Number  has not been updated');
            return back();
        }
    }
    public function changeaddress(Request $request){
        $id = Auth::user()->id;
        $user= User::find($id);

        if(Auth::attempt(array('email'=>$user->email,'password'=>$request->addpass))){
            $user->address= $request->newaddress;
            $user->save();
            session()->flash('success','Address  has been updated');
            return back();
        }
        else{
            session()->flash('failure','Address  has not been updated');
            return back();
        }
    }
    public function addimage(Request $request)
    {
        $image=$request->image;
        $final_image= Image::make($image)->resize(180,180, function ($constraint) {
            $constraint->aspectRatio();
        });
        $originalpath='/images/profiles/';
        $final_image->save('images/profiles/'.time().$image->getClientOriginalName());

        $user_image = new UserImage;
        $user_image->user_id = Auth::user()->id;
        $user_image->image=time().$image->getClientOriginalName();
        $user_image->save();
        session()->flash('success','Image has been added');
        return back();
    }




}
