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

    public function getSofaByFeatured()
    {
    	$query = $this->model->where('category_id', '1')
    		->orderBy('unit_price', 'DESC')->get();
    	return $query;
    }

    public function getProductByNew()
    {
    	$query = $this->model
    		->orderBy('id', 'DESC')->get();
    	return $query;
    }

    public function getBangheByFeatured()
    {
    	$query = $this->model->where('category_id', '2')
    		->orderBy('unit_price', 'DESC')->get();
    	return $query;
    }

    public function getSofaByTop()
    {
    	$query = $this->model->where('category_id', '1')
    		->orderBy('discount', 'DESC')->limit(3)->get();
    	return $query;
    }

    public function getBangheByTop()
    {
    	$query = $this->model->where('category_id', '2')
    		->orderBy('discount', 'DESC')->limit(3)->get();
    	return $query;
    }

    public function getProductBySlug($get_slug)
    {
    	$query = $this->model->where('category_id', $get_slug->id)->get();

    	return $query;
    }

    public function getProductSlug($slug)
    {
        $query = $this->model->where('slug', $slug)->first();

        return $query;
    }

    public function getProductDetail($slug)
    {
        $query = $this->model->where('slug', $slug)->first();

        return $query;
    }

    public function getProductRelated($product_detail)
    {
        $query = $this->model
        ->where('category_id', $product_detail->category_id)->limit(10)->get();

        return $query;
    }

    public function productBuy($id)
    {
        $query = $this->model->where('id', $id)->first();
        return $query;
    }
}
