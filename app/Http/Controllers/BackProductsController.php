<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\ProductSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;
use Intervention\Image\Size;
use Illuminate\Support\Facades\File;

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
        $productimg = ProductImage::where('product_id', '=', $product->id)->get();
        $destination=public_path().'/images/products/';

        if(count($productimg)>0){
            foreach ($productimg as $producti){
                    $loaction = $destination . $producti->image;
                    $this->filedistroy($loaction);
            }
        }
        else{
            dd("file(s) doesnt exist.");

        }

        $product->delete();
    }
    session()->flash('success','Product has been deleted'. $loaction);
    return back();
    }
    public function deleteimage($id)
    {
        $image = ProductImage::find($id);

        $path = public_path().'images/products/';

        File::delete('images/products/'.$image->image);
        $image->delete();

        session()->flash('success','Image has been Deleted');
        return back();
    }



    public function filedistroy($path){
        if(File::exists($path)){
            File::delete($path);
            return true;
        }
        else{
            return false;

        }
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
          'title' => 'required|max:150',
          'price' => 'required|numeric',
          'category_id'=>'required',
          'description'=>'required',
            'product_image'=>'required'
        ]);



        $product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        //$product->size=$request->size;

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

          if(!is_null($request->size)) {
              foreach ($request->size as $size) {
                  $newsize = new ProductSize;
                  $newsize->name = $size;
                  $newsize->product_id = $product->id;

                  $newsize->save();

                  //$product->size()->Hasmany::create($newsize);
                  //$newsize->product()->save($product);
              }
          }





        //ProductImage Model insert Image
        if(count($request->product_image) > 0) {
          foreach($request->product_image as $image) {

          $final_image= Image::make($image)->resize(1200, 1486, function ($constraint) {
                  $constraint->aspectRatio();
              });
          $originalpath=public_path().'/images/products/';
          $final_image->save('images/products/'.time().$image->getClientOriginalName());

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
        if(count($request->image) > 0) {
          foreach($request->image as $image) {

          $final_image= Image::make($image);
          $originalpath=public_path().'/images/products/';
          $final_image->save($originalpath.time().$image->getClientOriginalName());

          $product_image = new ProductImage;
          $product_image->product_id = $product->id;
          $product_image->image=time().$image->getClientOriginalName();
          $product_image->save();
        }
      }


          session()->flash('success','Product has been edited');
          return back();
      }
}
