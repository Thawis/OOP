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
	<title>แก้ไขข้อมูล</title>
</head>

<?php 
try {
	$file_db = new PDO('sqlite:myDatabase.sqlite3');
	//$memory_db = new PDO('sqlite::memory:');   
} catch(PDOException $e) {
	echo $e->getMessage();
}
$result = $file_db->query('SELECT * FROM tb_question');
?>

<body>
	<div class="row">
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">แก้ไขข้อมูล</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form role="form">
						<!-- text input -->
						<?php 
						foreach ($result as $result) {
							?>
							<div class="rows">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" value="<?=$result['name']?>" placeholder="Enter ...">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" class="form-control" value="<?=$result['valuepoint']?>" placeholder="Enter ...">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<button type="button" class="btn btn-danger">ล้าง</button>
										<button type="button" class="btn btn-warning">แก้ไข</button>
									</div>
								</div>
							</div>
							<?php } ?>
						</form>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>
		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<!-- CHART.JS -->
		<script src="plugins/chartjs/Chart.min.js"></script>
		<!-- Sweet Alert -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			$(function(){
				// $('#myModal').modal('show');
			});
			function makeaction(){
				$('#btn_submit').removeAttr('disabled');
			}	
		</script>
	</body>
	</html>