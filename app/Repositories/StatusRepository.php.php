<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class StatusRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Status();
    }
}
