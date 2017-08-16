<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BillRepository;
use Mail;
use App\Repositories\StatusRepository;
use App\Repositories\UserRepository;
use App\Repositories\BillDetailRepository;

class BillController extends Controller
{
    public function __construct()
    {
        $this->bill_repo = new BillRepository();
        $this->status_repo = new StatusRepository();
        $this->user_repo = new UserRepository();
        $this->billDetail_repo = new BillDetailRepository();
    }

    public function showBillsList()
    {
        $bills = $this->bill_repo->getAll();
        $status = $this->status_repo->getAll();
        return view('admin.bills.show', compact('bills', 'status'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'status_id' => $request->status,
        ];

        //update vào database
        $result = $this->bill_repo->update($id, $data);

        $bill = $this->bill_repo->getById($id);
        $status = $bill->Status->status_name;

        if($request->status != 1) {
            $this->sendEmail($bill->Customer, $status);
        }

        if($result) {
            return redirect(route('admin.bill.list'))->with('success', 'Edit success!');
        } else {
            return redirect()->back()->with('error', 'Edit fail');
        }
    }

    private function sendEmail($customer, $status)
    {
        $id = $customer->id;
        $email = $this->user_repo->getEmail($id); //Lấy email của người đặt sách

        Mail::send('admin.emails.email_bill', [ // email là tên template được gửi đi(admin/emails/email_bill.blade.php), truyền biến $user và $status vào template này
            'user' => $customer->name,
            'status' => $status
        ], function ($message) use ($email, $customer) {
            $message->to($email); // gửi mail đến địa chỉ email của customer
            $message->subject("Hello $customer->name, This is notice of your order"); // chủ đề gửi
        });
    }

    public function remove($id)
    {
        // Remove from the database by slug
        $result = $this->bill_repo->destroyById($id);

        if($result)
        {
            return redirect()->back()->with('success', 'Remove success!');
        } else {
            return redirect()->back()->with('error', 'Remove fail');
        }
    }

    public function printf($id)
    {
        $bill = $this->bill_repo->getById($id);
        $billDetails = $this->billDetail_repo->getByBillId($id);
        return view('admin.bills.print', compact('bill', 'billDetails'));
    }
}
