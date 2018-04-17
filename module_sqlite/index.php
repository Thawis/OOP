<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="plugins/iCheck/all.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>แบบสอบถาม</title>
</head>
<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="index.html">แบบสอบถาม</a>
		</div>

		<div class="register-box-body">
			<!-- <p class="login-box-msg">แบบสอบถาม</p> -->
			<form action="?" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="ชื่อ - นามสกุล" required="">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Email" required="">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group">
					<div class="box-header">ระดับความพึงพอใจในระบบ</div>
					<label>
						<input type="radio" name="r1" value="1" class="minimal" required=""> มากที่สุด
					</label></br>
					<label>
						<input type="radio" name="r1" value="2" class="minimal" required=""> มาก
					</label></br> 
					<label>
						<input type="radio" name="r1" value="3" class="minimal" required=""> ปานกลาง
					</label></br>
					<label>
						<input type="radio" name="r1" value="4" class="minimal" required=""> น้อย
					</label></br>
					<label>
						<input type="radio" name="r1" value="5" class="minimal" required=""> น้อยที่สุด
					</label>
				</div>
				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="6Ldxt1MUAAAAAA4qwSd2nu-teoeMzVyCfKtxzI8T"></div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery 2.2.3 -->
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="plugins/iCheck/icheck.min.js"></script>
	<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"	async defer></script> -->
<script>
	$(function(){
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});
	});		
</script>
</body>
</html>