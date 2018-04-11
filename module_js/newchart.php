<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	
	<title>Chart</title>
</head>
<body>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3">Single Bar Chart </h4>
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<button type="button" id="btn" name="btn" value="verygood">VERY GOOD</button>
				<button type="button" id="btn" name="btn" value="good">GOOD</button>
				<button type="button" id="btn" name="btn" value="normal">NORMAL</button>
				<button type="button" id="btn" name="btn" value="bad">BAD</button>
				<button type="button" id="btn" name="btn" value="verybad">VERY BAD</button>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script>
		$(function(){
			readchart();
			$('button').click(function() {
				var choice = $(this).val();	
				addpoint(choice);	
			})
		});
		function readchart(){
			var choice = ["VeryGood", "Good", "Normal","Bad","VeryBad"];
			var point = [];
			$.ajax({
				url:'getdata.php',
				dataType:'JSON',
				success: function(data){
					point.push(data.verygood);
					point.push(data.good);
					point.push(data.normal);
					point.push(data.bad);
					point.push(data.verybad);
					var ctx = document.getElementById("myChart").getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'horizontalBar',
						data: {
							labels : choice,
							datasets: [{
								label: 'ทดสอบผล',
								data: point,
								backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
								],
								borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
								],
								borderWidth: 1
							}]
						},
						options: {
							legend:{
								display: false
							},
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero:true
									}
								}],
								xAxes: [{
									ticks: {
										beginAtZero:true
									}
								}]
							}
						}
					});
				}
			});
		}
		function addpoint(choice){
			//console.log(cc);
			$.ajax({
				url: 'addpoint.php',
				type: 'get',
				data: {choice:choice},
				dataType: 'html',
				success: function (data) {
					//console.log(data);
					readchart();
				}
			});
		}
	</script>
</body>
</html>