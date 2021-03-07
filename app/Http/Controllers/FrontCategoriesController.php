<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FrontCategoriesController extends Controller
{
    //
    public function index(){
        $categories = Category::orderBy('id','desc')->get();
        return view('frontend.page.category.index')->with('categories',$categories);
    }
}
