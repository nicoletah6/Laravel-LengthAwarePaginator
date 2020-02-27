<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function products () {
        return $this->hasMany('App\Product');
    }

    public function getProductsCountAttribute() {
        $count = 0;
        $count += Product::where('category_id', $this->id)->count();
        
        return $count;
        
      }
}
