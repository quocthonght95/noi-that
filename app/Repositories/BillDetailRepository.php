<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\BillDetail;

class BillDetailRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new BillDetail;
    }
}
