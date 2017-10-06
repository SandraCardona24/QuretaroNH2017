<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminNeoris | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/blue.css">
	<!-- Custom -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/login.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

  <div class="wrapper">

    	<div class="login-box">
          <div class="login-logo">
            <a href="./index.html"><img src="<?=base_url()?>rsc/img/logo.png" alt="Neoris"><!--<b>Admin</b>Neoris--></a>
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
      
            <form action="Login/userdo" method="post">
              <div class="form-group has-feedback">
                <input name="username" id="email" type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                    <input type="checkbox">&nbsp;Remember Me
                  </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <a href="#">I forgot my password</a><br>
            <a href="./register.html" class="text-center">Register a new membership</a>
      
          </div>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

  </div>

	<!-- jQuery 3 -->
	<script src="<?=base_url()?>rsc/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=base_url()?>rsc/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?=base_url()?>rsc/js/icheck.min.js"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});

	</script>
</body>

</html>
