<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;
class BackProductsController extends Controller
{
    //
    public function index()
    {
      $products = Product::orderBy('id','desc')->get();
        return view('admin.page.product.allproducts')->with('products',$products);

    }
    public function create()
    {
        $category = Category::get();
        return view('admin.page.product.addproduct',compact('category'));
    }
    public function delete($id)
    {
    $product=Product::find($id);
    if(!is_null($product)){
        $product->delete();
    }
    session()->flash('success','Product has been deleted');
    return back();
    }



    public function edit($id)
    {
      $product = Product::find($id);
      $category = Category::get();
        return view('admin.page.product.edit',compact('product','category'));

    }


      public function store(Request $request)
      {

        $request->validate([
          'title' => 'required|unique:products|max:150',
          'price' => 'required|numeric',
          'category_id'=>'required',
          'description'=>'required',
        ]);



        $product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->size=$request->size;
        $product->quantity=$request->quantity;
          $product->code=$request->code;
          $product->tag=$request->tag;
          $product->featured=$request->featured;
          $product->material=$request->material;
          $product->color=$request->color;
          $product->care=$request->care;
          $product->value_addition=$request->value;
        $product->category_id=$request->category_id;
        $product->slug=Str::slug($request->title,'-');
        $product->save();

        //ProductImage Model insert Image
        if(count($request->product_image) > 0) {
          foreach($request->product_image as $image) {

          $final_image= Image::make($image)->resize(1200, 1486, function ($constraint) {
                  $constraint->aspectRatio();
              });
          $originalpath=public_path().'/images/products/';
          $final_image->save($originalpath.time().$image->getClientOriginalName());

          $product_image = new ProductImage;
          $product_image->product_id = $product->id;
          $product_image->image=time().$image->getClientOriginalName();
          $product_image->save();
        }
      }


          session()->flash('success','Product has been added');
          return back();
      }
      public function update(Request $request, $id)
      {

        $request->validate([
          'title' => 'required|max:150',
          'price' => 'required|numeric',
          'category_id'=>'required',
          'description'=>'required',
        ]);



        $product = Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
        $product->size=$request->size;
          $product->quantity=$request->quantity;
          $product->code=$request->code;
          $product->tag=$request->tag;
          $product->featured=$request->featured;
          $product->material=$request->material;
          $product->color=$request->color;
          $product->care=$request->care;
          $product->value_addition=$request->value;
        $product->save();

        //ProductImage Model insert Image
        /*if(count($request->product_image) > 0) {
          foreach($request->product_image as $image) {

          $final_image= Image::make($image);
          $originalpath=public_path().'/images/products/';
          $final_image->save($originalpath.time().$image->getClientOriginalName());

          $product_image = new ProductImage;
          $product_image->product_id = $product->id;
          $product_image->image=time().$image->getClientOriginalName();
          $product_image->save();
        }
      }*/


          session()->flash('success','Product has been edited');
          return back();
      }
}
