<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class ImageRepository extends BaseRepository
{
    public function __construct()
    {
    	$this->model = new Image;
    }
}
