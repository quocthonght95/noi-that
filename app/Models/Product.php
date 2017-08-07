<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'description', 'unit_price', 'discount', 'image', 'note', 'size', 'guarantee',
            'material', 'hot', 'is_hidden', 'category_id'
        ];

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

    public function getShortDec(){
        if (strlen($this->description) > 100){
            return substr($this->description, 0,strpos($this->description, ' ', 100)) . ' ...';
        } else {
        return $this->description;
        }
    }
}
