<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BillDetailRepository;
use App\Repositories\BillRepository;
use App\Repositories\StatusRepository;

class BillDetailsController extends Controller
{
    protected $billdetail_repo;
    protected $bill_repo;
    protected $status_repo;

    public function __construct()
    {
        $this->billdetail_repo = new BillDetailRepository();
        $this->bill_repo = new BillRepository();
        $this->status_repo = new StatusRepository();
    }

    public function showBillDetailsList($id)
    {
        $status = $this->status_repo->getAll();
        $bill = $this->bill_repo->getById($id);
        $billDetails = $this->billdetail_repo->getByBillId($id);
        return view('admin.BillDetails.show', compact('billDetails', 'bill', 'status'));
    }
}
