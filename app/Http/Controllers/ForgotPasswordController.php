<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Reminder;
use Mail;
use App\Http\Requests\ResetPasswordRequest;
use App\Repositories\UserRepository;

class ForgotPasswordController extends Controller
{

    protected $user_repo;

    public function __construct()
    {
        $this->user_repo = new UserRepository();
    }

    public function forgotPassword()
    {
        return view('frontend.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
        $user = $this->user_repo->byEmail($request->email); // Sentinel::findByCredentials(['email' => $request->email]);

        if (count($user) == 0) {
            return redirect()->back()->with('error', 'Invalid your email');
        }

        $reminder = Reminder::exists($user) ?: Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with('success', 'Reset code was sent to your email');
    }

    private function sendEmail($user, $code)
    {
        Mail::send('frontend.email.forgot-password', [ // email là tên template được gửi đi(views/email.blade.php), truyền biến $user và $code vào template này
            'user' => $user,
            'code' => $code
        ], function ($message) use ($user) {
            $message->to($user->email); // gửi mail đến địa chỉ email vừa đăng ký
            $message->subject("Hello $user->first_name, reset your password."); // chủ đề gửi
        });
    }

    public function resetPassword($email, $resetCode)
    {
        $user = $this->user_repo->byEmail($email);

        if (count($user) == 0) {
            abort(404);
        }

        if ($reminder = Reminder::exists($user)) {
            if ($resetCode == $reminder->code) {
                return view('frontend.reset-password');
            } else {
                return redirect(route('getLogin'));
            }
        } else {
            return redirect(route('getLogin'));
        }
    }

    public function postResetPassword(ResetPasswordRequest $request, $email, $resetCode)
    {
        $user = $this->user_repo->byEmail($email);

        if (count($user) == 0) {
            abort(404);
        }

        if ($reminder = Reminder::exists($user)) {
            if ($resetCode == $reminder->code) {
                Reminder::complete($user, $resetCode, $request->password);
                return redirect(route('getLogin'))->with('success', 'Vui lòng đăng nhập với mật khẩu mới');
            } else {
                return redirect('getLogin');
            }
        } else {
            return redirect('getLogin');
        }
    }
}
