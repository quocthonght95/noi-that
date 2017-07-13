<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }

    public function Bill_detail()
    {
    	return $this->hasMany(Bill_detail::class, 'product_id');
    }

    public function Image()
    {
    	return $this->hasMany(Image::class, 'product_id');
    }
}
