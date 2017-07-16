<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class ProductController extends Controller
{
    public function __construct()
    {
    	$this->product_repository = new ProductRepository;
    	$this->category_repository = new CategoryRepository;
    }

    public function index()
    {

    	return view('frontend.pages.product_lists');
    }

    public function getProductByCategory($slug)
    {
    	$get_slug = $this->category_repository->getSlug($slug);
    	$product = $this->product_repository->getProductBySlug($get_slug);
    	$top_sofa = $this->product_repository->getSofaByTop();
    	$top_banghe = $this->product_repository->getBangheByTop();

    	return view('frontend.pages.product_lists', compact('product', 'get_slug', 'top_sofa', 'top_banghe'));
    }
}
