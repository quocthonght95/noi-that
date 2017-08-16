@extends('frontend.partials.master')
@section('title', '- Profile')
@section('content')
    <style>
<!--

    .form-control {
        color: #3c3c3c !important;
        width: 100% !important;
        border-radius: 3px !important;
        border:1px solid #ccc !important;
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075) !important;
    }

    .form-control:focus {
        background: #fff !important;
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168 !important;

    }


-->
</style>
     <!-- Page Content -->
    <div class="container">
        <div class="space20"></div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Thông tin tài khoản</div>
                    <div class="panel-body">

                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br/>
                            @endforeach
                        </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        <form action="{{ route('postProfile') }}" method="POST">
                            {{ csrf_field() }}
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" name="name"
                                 aria-describedby="basic-addon1" value="{{ $userlogin->name }}">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input style="display: block" type="email" class="form-control" placeholder="Email" name="email"
                                 aria-describedby="basic-addon1" readonly value="{{ $userlogin->email }}" >
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" id="changePassword" name="checkpassword">
                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="password"
                                aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" name="passwordAgain"
                                aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">
                                Sửa
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- end Page Content -->

@endsection

@section('script')

    <script>
        $(document).ready(function() {
            $("#changePassword").click(function() {
                if($(this).is(':checked')) {
                    $(".password").removeAttr('disabled');
                } else {
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>

@endsection
