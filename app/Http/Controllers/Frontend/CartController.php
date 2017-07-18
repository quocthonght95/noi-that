<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Cart;

class CartController extends Controller
{
	public function __construct()
	{
		$this->product_repository = new ProductRepository;
	}
    public function index()
    {
    	$content = Cart::content();
    	$total = Cart::total();
    	// dd($content);

    	return view('frontend.pages.cart', compact('content', 'total'));
    }

    public function addCart($id)
    {
    	$product_buy = $this->product_repository->productBuy($id);
        Cart::add(array('id' => $id, 'name' =>$product_buy->name, 'qty' =>1,
            'price' => $product_buy->unit_price, 'options'=>array('img' => $product_buy->image)));
        $content = Cart::content();

        return redirect()->back();

    }
}
