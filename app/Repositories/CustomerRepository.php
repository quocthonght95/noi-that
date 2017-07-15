<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Customer;
    }
}
