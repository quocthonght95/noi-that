<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name', 'email', 'address', 'phone'];

    public function Bill()
    {
        return $this->hasOne('App\Models\Bill', 'customer_id', 'id');
    }
}
