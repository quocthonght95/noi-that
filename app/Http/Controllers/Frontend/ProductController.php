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

    public function ProductDetail($slug)
    {
        $product_detail = $this->product_repository->getProductDetail($slug);
        $product_related = $this->product_repository->getProductRelated($product_detail);
        return view('frontend.pages.product_detail', compact('product_detail', 'product_related'));
    }
}
