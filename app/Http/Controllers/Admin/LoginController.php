<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;

class LoginController extends Controller
{
    public function index()
    {
    	return view('admin.pages.login');
    }

    public function login(AdminLoginRequest $request)
    {
    	try
    	{
    		if(Sentinel::authenticate($request->all()))
    		{
    			return 	redirect()->route('admin.index');
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
        // dd($error);
    	return redirect()->back()->with('error', $error);

    }

    public function logout()
    {
        Sentinel::logout();
        return redirect()->route('admin.login');
    }
}
