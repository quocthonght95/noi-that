<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = 'bill_details';
    protected $fillable = ['quantity', 'unit_price', 'product_id', 'bill_id'];

    public function Product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }

    public function Bill()
    {
    	return $this->belongsTo(Bill::class, 'bill_id');
    }
}
