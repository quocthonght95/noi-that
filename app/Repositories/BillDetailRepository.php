<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bill_detail;

class BillDetailRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Bill_detail;
    }
}
