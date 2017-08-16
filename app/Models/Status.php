<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";

    public function Bill()
    {
    	return $this->hasMnay(Bill::class, 'status_id');
    }
}
