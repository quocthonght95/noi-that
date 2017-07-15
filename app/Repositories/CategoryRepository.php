<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Category;
    }
}
