<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\ProductRepository;

class HomePageController extends Controller
{
	public function __construct()
	{
		$this->product_repository = new ProductRepository();
	}

    public function index()
    {
    	$sofa = $this->product_repository->getSofaByFeatured();
    	$new = $this->product_repository->getProductByNew();
    	$banghe = $this->product_repository->getBangheByFeatured();
    	$top_sofa = $this->product_repository->getSofaByTop();
    	$top_banghe = $this->product_repository->getBangheByTop();
    	return view('frontend.pages.index', compact('sofa', 'new', 'banghe',
    		'top_sofa', 'top_banghe'));
    }
}
