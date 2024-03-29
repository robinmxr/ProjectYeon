<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
      'title','category_type',
    ];

    public function product()
    {
      return $this->hasMany('App\Models\Product');
    }
    public function delete()
    {

        $this->product()->delete();

        return parent::delete();
    }
}
