<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use Auth;

class ProductReviewController extends Controller
{
    public function addreview($id,Request $request)
    {
        $productreview = new ProductReview;
        $productreview->user_id = Auth::user()->id;
        $productreview->product_id = $id;
        $productreview->review = $request->review;
        $productreview->save();
        return back();
    }
}
