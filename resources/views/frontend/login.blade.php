@extends('frontend.partials.master')
@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="account-login">
            <div class="page-title">
                <h2>Đăng nhập</h2>
            </div>
            <fieldset class="col2-set">
                <legend>Đăng nhập</legend>
                <div class="col-1 new-users"><strong>Đăng nhập</strong>
                    <div class="content">
                        <p>Chưa có tài khoản ?</p>
                        <div class="buttons-set">
                            <button onclick="window.location='{{ route('getRegister') }}';"
                            class="button create-account" type="button">
                                <span>Đăng ký</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-2 registered-users"><strong>Đăng nhập</strong>
                    <br>
                    @if(Session::has('success'))
                        {{ Session::get('success') }}
                    @endif
                    <div class="content">
                        <form action="{{ route('postLogin') }}" method="post">
                            {{ csrf_field() }}
                            <ul class="form-list">
                                <li{{ $errors->has('email') ? 'has-error' : '' }}>
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
                                    <label for="pass">Mật khẩu <span class="required">*</span></label>
                                    <br>
                                    @if($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                        <br>
                                    @endif
                                    <input type="password" title="Password" id="pass"
                                    class="input-text required-entry validate-password" name="password">
                                </li>
                            </ul>
                            <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="checkbox-inline icheck pull-left pt0">
                                            <label for="">
                                                <input type="checkbox" name="remember"></input>
                                                Nhớ thông tin
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login">
                                    <span>Đăng nhập</span>
                                </button>
                                <a class="forgot-word" href="">Quên mật khẩu ?</a>
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