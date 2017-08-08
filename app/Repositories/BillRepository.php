<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;

class BillRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Bill();
    }

    public function getLastInsertId()
    {
        return $this->model->all()->max('id');
    }
}
