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
	<div class="row">
		<div class="col-md-6">
			<div class="register-box">
				<div class="register-logo">
					แบบสอบถาม
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
							<!-- <div class="box-header" id="headerbox">ระดับความพึงพอใจในระบบ</div> -->
							<?php 
							try {
								$file_db = new PDO('sqlite:myDatabase.sqlite3');
							} catch(PDOException $e) {
								echo $e->getMessage();
							}
							$result = $file_db->query('SELECT * FROM tb_question');
							foreach ($result as $result) { 
								if($result['id']==0){
									echo '<div class="box-header" id="headerbox">'.$result['name'].'</div>';
								}else{
									?>
									<label>
										<input type="radio" name="r1" value="<?=$result['id']?>" class="minimal" required=""> <?=$result['name']?>
									</label></br>
									<?php }
								} ?>
							</div>
							<div class="form-group">
								<div class="g-recaptcha" data-callback="makeaction" data-sitekey="6Ldxt1MUAAAAAA4qwSd2nu-teoeMzVyCfKtxzI8T"></div>
							</div>
							<div class="row">
								<!-- /.col -->
								<div class="col-xs-4">
									<button type="submit" id="btn_submit" class="btn btn-primary btn-block btn-flat" disabled="">Submit</button>
								</div>
								<!-- /.col -->
							</div>
						</form>
					</div>
					<!-- /.form-box -->
				</div>
				<!-- /.register-box -->
			</div>
			<div class="col-md-6">
				<div class="box box-success" style="">
					<div class="box-header with-border">
						<h3 class="box-title">Bar Chart</h3>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="barChart" style="height:230px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>


		<!-- Button trigger modal -->
<!-- 		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			Launch demo modal
		</button> -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Login</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputuser" placeholder="Username" required=""> 
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<!-- CHART.JS -->
		<script src="plugins/chartjs/Chart.min.js"></script>
		<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"	async defer></script> -->
		<script src="bar.js"></script>
		<!-- Sweet Alert -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			$(function(){
				alert('ggwp');
			});
			function makeaction(){
				$('#btn_submit').removeAttr('disabled');
			}	
		</script>
	</body>
	</html>