<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Image;


class BackCategoriesController extends Controller
{
    //
    public function index()
    {
      $categories = Category::orderBy('id','desc')->get();
        return view('admin.page.category.allcategories', compact('categories'));

    }
    public function create()
    {
        return view('admin.page.category.addcategory');
    }




    public function edit($id)
    {
      $category = category::find($id);
        return view('admin.page.category.editcategory', compact('category'));

    }

      public function store(Request $request)
      {

        $request->validate([
          'title' => 'required|max:150',
            'category_type' => 'required',
        ]);



        $category = new Category;
        $category->title=$request->title;
        $category->category_type=$request->category_type;
        $image = $request->image;
        $final_image= Image::make($image)->resize(1200, 1486, function ($constraint) {
          $constraint->aspectRatio();
      });
  $originalpath=public_path().'/images/categories/';
  $final_image->save($originalpath.time().$image->getClientOriginalName());
  $category->image=time().$image->getClientOriginalName();
        $category->save();




          session()->flash('success','Category has been Added');
          return back();
      }
      public function update(Request $request, $id)
      {

        $request->validate([
          'title' => 'required|max:150',
          'category_type'=>'required',
        ]);



        $category = category::find($id);
        $category->title=$request->title;
        $category->category_type=$request->category_type;
        
        $category->save();




       return redirect()->route('admin.categories');
      }
    public function delete($id)
    {
        $category=Category::find($id);
        if(!is_null($category)){
            $category->delete();
        }
        session()->flash('success','Category has been deleted');
        return back();
    }
}
