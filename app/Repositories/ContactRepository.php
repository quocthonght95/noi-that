<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class ContactRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Contact;
    }
}
