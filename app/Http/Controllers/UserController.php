<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Sentinel;
use App\Http\Requests\ProfileRequest;

class UserController extends Controller
{
    protected $user_repo;

    public  function __construct()
    {
        $this->user_repo = new UserRepository();
    }

    public function getProfile()
    {
        return view('frontend.users.profile');
    }

    public function postProfile(ProfileRequest $request)
    {
        $user = Sentinel::getUser();
        if($request->checkpassword == "on") {
            $this->validate($request, [
                'password' => 'required|min:4|max:32',
                'passwordAgain' => 'required|same:password'
            ]);
            $data = [
                'name' => $request->name,
                'password' => $request->password,
            ];
        } else {
            $data = [
                'name' => $request->name,
            ];
        }
        $users = Sentinel::update($user, $data);
        if($users) {
            return redirect(route('profile'))->with('success', 'Bạn đã sửa thành công!');
        } else {
            return redirect()->back()->with('error', 'Sửa thất bại');
        }
    }
}
