<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'title','description','category_id','size','price','quantity','offer_id','slug',
    ];
    protected $casts = [
        'product_added_at' => 'datetime',
    ];

    public function image()
    {
      return $this->hasMany('App\Models\ProductImage');
    }


    public function category()
    {
      return $this->belongsTo('App\Models\Category', 'category_id');

    }
    public function offer()
    {
        return $this->belongsTo('App\Models\Offer','offer_id');
    }
    public function size()
    {
        return $this->hasMany('App\Models\ProductSize');
    }

    public function delete()
    {
        // delete all related photos
        $this->image()->delete();
        $this->size()->delete();
        // as suggested by Dirk in comment,
        // it's an uglier alternative, but faster
        // Photo::where("user_id", $this->id)->delete()

        // delete the user
        return parent::delete();
    }

}
