<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;

class PaymentRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Payment;
    }
}
