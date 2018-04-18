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
		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<!-- CHART.JS -->
		<script src="plugins/chartjs/Chart.min.js"></script>
		<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"	async defer></script> -->
		<script>
			$(function(){
				$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
					checkboxClass: 'icheckbox_minimal-blue',
					radioClass: 'iradio_minimal-blue'
				});
	//--------------
	//---- DATA ----
	//--------------
	var areaChartData = {
		labels: ["January", "February", "March", "April", "May"],
		datasets: [
		{
			label: "TEST",
			fillColor: "rgba(210, 214, 222, 1)",
			strokeColor: "rgba(210, 214, 222, 1)",
			pointColor: "rgba(210, 214, 222, 1)",
			pointStrokeColor: "#c1c7d1",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(220,220,220,1)",
			data: [65, 59, 80, 81, 56]
		}
		]
	};
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    // barChartData.datasets[1].fillColor = "#00a65a";
    // barChartData.datasets[1].strokeColor = "#00a65a";
    // barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
  };
  barChartOptions.datasetFill = false;
  barChart.Bar(barChartData, barChartOptions);
});
			function makeaction(){
				$('#btn_submit').removeAttr('disabled');
			}		
		</script>
	</body>
	</html>