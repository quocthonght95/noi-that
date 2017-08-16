<?php

namespace App\Http\Controllers\Frontend;

// use Illuminate\Http\Request;
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
use Request;

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
    	// dd($total);

    	return view('frontend.pages.cart', compact('content', 'total'));
    }

    public function addCart($id)
    {
    	$product_buy = $this->product_repository->productBuy($id);
        $format_price = round($product_buy->unit_price - $product_buy->discount*0.01*$product_buy->unit_price, -3);
        Cart::add(array('id' => $id, 'name' =>$product_buy->name, 'qty' =>1,
            'price' => $format_price, 'options'=>array('img' => $product_buy->image)));
        $content = Cart::content();

        return redirect()->back();

    }

    public function updateCart()
    {
        if(Request::ajax())
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            if($qty<10 and $qty>0)
            {
                Cart::update($id, $qty);
            }
            $data = [
                'qty'  => Cart::count(),
                'total' => Cart::subtotal(),
                'qty1' => Cart::get($id)->qty,
                'price' => Cart::get($id)->price,
                'id' => $id,
            ];
             return response($data,200,[]);
        }
    }

    public function destroyCart($id)
    {
        Cart::remove($id);
        return redirect()->route('cart');
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
        $total = Cart::total();
        if($total > 0){
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
        }else{
            return redirect()->route('cart')->with('error', 'Giỏ hàng rỗng, vui lòng thêm sản phẩm rồi đặt hàng');
        }
    }
}
