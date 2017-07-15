<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Product;
    }
}
