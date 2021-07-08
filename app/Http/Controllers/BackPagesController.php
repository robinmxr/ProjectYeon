<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
Use App\Models\Order;

class BackPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index');


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  }
