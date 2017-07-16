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

    public function getSlug($slug)
    {
    	$query = $this->model->where('slug', $slug)->first();

    	return $query;
    }
}
