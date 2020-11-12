<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
      'title','parent_id',
    ];

    public function product()
    {
      return $this->hasMany('App\Models\Product');
    }
    public function parent()
    {
      return $this->belongsTo(Category::class, 'parent_id');
    }
}
