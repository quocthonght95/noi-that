<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function byEmail($email)
    {
        $query = $this->model->whereEmail($email)->first();
        return $query;
    }

    public function getEmail($id)
    {
        $query = $this->model->where('id', $id)->first();
        return $query->email;
    }
}
