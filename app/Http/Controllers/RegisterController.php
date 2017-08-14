<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests\RegisterRequest;
use Activation;
use Mail;

class RegisterController extends Controller
{
    public function getRegister()
    {

        return view('frontend.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $user = Sentinel::register($request->all()); // đăng ký nhưng chưa được active

        $activation = Activation::create($user); // thêm user vừa đăng ký vào bẳng activations nhưng column completed vẫn = 0 (chưa activate)
        $this->sendEmail($user, $activation->code); // gọi hàm sendEmail, code lấy từ bảng activations (code đã được tự tạo khi gọi hàm create)

        $role = Sentinel::findRoleBySlug('customers');
        $role->users()->attach($user);
        if($user) {
            return redirect('login')->with('success', 'Đăng ký thành công, vui lòng truy cập email để xác nhận');
        } else {
            return redirect()->back()->with('error', 'Register failed!');
        }
    }

    private function sendEmail($user, $code)
    {
        Mail::send('frontend.email.email', [ // email là tên template được gửi đi(views/email.blade.php), truyền biến $user và $code vào template này
            'email' => $user->email,
            'code' => $code
        ], function ($message) use ($user) {
            $message->to($user->email); // gửi mail đến địa chỉ email vừa đăng ký
            $message->subject("Hello, $user->name, activate your account"); // chủ đề gửi
        });
    }
}
