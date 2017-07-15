<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="">
    <meta name="author" content="The Red Team">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet">
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body class="focused-form">
		<div class="container" id="login-form">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h2>Login Admin</h2></div>
							<div class="panel-body">
								@if(session('error'))
									<div class="alert alert-danger">
										<button type="button" aria-hidden="true" class="close">×</button>
										<span>{{ session('error') }}</span>
									</div>
								@endif
							<form action="{{route('admin.login')}}" class="form-horizontal" method="POST">
								{{csrf_field()}}
								<div class="form-group{{ $errors->has('email')? : '' }}">
			                        <div class="col-xs-12">
				                        @if($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
			                        	<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
											<input type="email" class="form-control" placeholder="Email" name="email">
										</div>
			                        </div>
								</div>

								<div class="form-group{{ $errors->has('password')? : '' }}">
			                        <div class="col-xs-12">
			                        	@if($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
			                        	@endif
			                        	<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
										</div>
			                        </div>
								</div>

								<div class="form-group">
									<div class="col-xs-12">
										<!-- <a href="extras-forgotpassword.html" class="pull-left">Forgot password?</a> -->
										<div class="checkbox-inline icheck pull-left pt0">
											<label for="">
												<input type="checkbox" name="remember"></input>
												Remember me
											</label>
										</div>
									</div>
								</div>

								<div class="panel-footer">
									<div class="clearfix">
										<input type="submit" value="Login" class="btn btn-primary pull-right">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/jqueryui-1.9.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>
		<script src="assets/plugins/jstree/dist/jstree.min.js"></script>

		<script src="assets/plugins/codeprettifier/prettify.js"></script>
		<script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>

		<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>

		<script src="assets/plugins/iCheck/icheck.min.js"></script>

		<script src="assets/js/enquire.min.js"></script> -->
		<script src="assets/plugins/bootbox/bootbox.js"></script>
		<script src="assets/js/application.js"></script>
		<script src="assets/demo/demo.js"></script>
	</body>
</html>