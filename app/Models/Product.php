<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'title','description','category_id','price','quantity','offer_id','slug',
    ];


    public function image()
    {
      return $this->hasMany('App\Models\ProductImage');
    }


    public function category()
    {
      return $this->belongsTo('App\Models\Category');
    }

}
