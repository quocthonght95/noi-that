@extends('frontend.partials.master')
@section('title', 'Đăng ký')
@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="account-login">
            <div class="page-title">
                <h2>Đăng ký tài khoản</h2>
            </div>
            <fieldset class="col2-set">
                <legend>Đăng ký tài khoản</legend>
                <div class="col-1 new-use"><strong>Thành viên</strong>
                    <div class="content">
                        <p>Đăng ký tài khoản để mua hàng</p>
                        <p>Bạn đã có tài khoản ?</p>
                        <div class="buttons-set">
                            <button onclick="window.location='{{ route('getLogin') }}';" class="button create-account" type="button"><span>Đăng nhập</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-2 registered-users">
                    <strong>Đăng ký thành viên</strong>
                    <div class="content">
                        <form action="{{ route('postRegister') }}" method="post">
                            {{ csrf_field() }}
                            <ul class="form-list">
                                <li{{ $errors->has('name') ? 'has-error' : '' }}>
                                    <label for="name">Tên<span class="required">*</span></label>
                                    <br>
                                    @if($errors->has('name'))
                                        <strong>{{ $errors->first('name') }}</strong>
                                        <br>
                                    @endif
                                    <input type="text" title="name" class="input-text required-entry" name="name">
                                </li>
                                <li{{ $errors->has('email') ? 'has-error' : '' }}>
                                    <br>
                                    <label for="email">Email<span class="required">*</span></label>
                                    <br>
                                    @if($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                        <br>
                                    @endif
                                    <input type="email" title="Email Address" class="input-text required-entry"
                                    id="email" name="email">
                                </li>
                                <li{{ $errors->has('password') ? 'has-error' : '' }}>
                                    <br>
                                    <label for="pass">Mật khẩu<span class="required">*</span></label>
                                    <br>
                                    @if($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                        <br>
                                    @endif
                                    <input type="password" title="Password" id="pass"
                                    class="input-text required-entry validate-password" name="password">
                                </li>
                                <li{{ $errors->has('password-confirmation') ? 'has-error' : '' }}>
                                    <br>
                                    <label for="pass">Xác nhận mật khẩu<span class="required">*</span></label>
                                    <br>
                                    @if($errors->has('password-confirmation'))
                                        <strong>{{ $errors->first('password-confirmation') }}</strong>
                                        <br>
                                    @endif
                                    <input type="password" title="Password Confirmtion" id="pass" class="input-text required-entry validate-password" name="password-confirmation">
                                </li>
                            </ul>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login">
                                    <span>Đăng ký</span>
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </fieldset>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
@endsection