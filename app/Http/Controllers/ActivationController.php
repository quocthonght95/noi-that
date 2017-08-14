<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Activation;

class ActivationController extends Controller
{
    protected $user_repo;

    public function __construct()
    {
        $this->user_repo = new UserRepository();
    }

    public function activate($email, $activationCode)
    {
        $user = $this->user_repo->byEmail($email);

        if(Activation::complete($user, $activationCode))
        {

            return redirect(route('getLogin'));
        }
    }
}
