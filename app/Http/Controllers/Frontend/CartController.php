<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\BillRepository;
use App\Repositories\BillDetailRepository;
use Cart;
use Session;
use Sentinel;

class CartController extends Controller
{
	public function __construct()
	{
        $this->product_repository = new ProductRepository;
        $this->customer_repository = new CustomerRepository;
        $this->payment_repository = new PaymentRepository;
        $this->bill_repository = new BillRepository;
		$this->bill_detail_repository = new BillDetailRepository;
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

    public function getOrder()
    {
        $id = Sentinel::getUser()->id;
        $customer = $this->customer_repository->getById($id);
        $payment = $this->payment_repository->getAll();

        return view('frontend.pages.order', compact('id', 'customer', 'payment'));
    }

    public function postOrder(CustomerRequest $request, $id)
    {
        $content = Cart::content();
        $total = round(Cart::total());
        // dd($total);
        if($this->customer_repository->getById($id) == null) {
            $data_customer = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'note' => $request->note,
                'phone' => $request->phone
            ];
            $this->customer_repository->store($data_customer);
        }

        $data_bill = [
            'customer_id' => $id,
            'date_order' => date('Y-m-d'),
            'total' => $total,
            'payment_id' => $request->payment,
            'note' => $request->notes,
        ];
        $this->bill_repository->store($data_bill);

        foreach ($content as $product) {
            $data_detail = [
                'bill_id' => $this->bill_repository->getLastInsertId(),
                'product_id' => $product->id,
                'quantity' => $product->qty,
                'unit_price' => $product->price,
            ];
            $this->bill_detail_repository->store($data_detail);
        }
        Session::forget('cart');

        return redirect()->back()->with('success','Đặt hàng thành công');
    }
}
