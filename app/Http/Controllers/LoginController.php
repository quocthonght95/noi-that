<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin()
    {

        return view('frontend.login');
    }

    public function postLogin(LoginRequest $request)
    {
        try
        {
            if(Sentinel::authenticate($request->all()))
            {

                return  redirect()->route('home');
            }
            $error = "Email hoặc password sai";
        } catch (NotActivatedException $e)
        {
            $error = $e->getMessage();
        } catch (ThrottlingException $e)
        {
            $delay = $e->getDelay();
            $error = "Bạn bị khóa trong vòng $delay giây !";
        }

        return redirect()->back()->with('error', $error);
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect()->route('getLogin');
    }
}
