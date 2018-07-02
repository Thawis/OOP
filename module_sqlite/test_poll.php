<?php
// connect sqlite
try {
	$file_db = new PDO('sqlite:mydata.db');
	//$memory_db = new PDO('sqlite::memory:');   
} catch(PDOException $e) {
	echo $e->getMessage();
}

if(isset($_POST['btn_submit'])){
	echo 'active';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		TEST SQLITE
	</title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" id="btn_submit" name="btn_submit" value="Submit" />
	</form>

	<div>
		<ul class="ul_form">
			<li>
				<label for="yes"><input type="radio" required="" name="loans" value="0" id="yes"></label>
				สินเชื่อรถจักรยานยนต์ 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
			<li>
				<label for="no"><input type="radio" required="" name="loans" value="1" id="no"></label>
				สินเชื่อรถยนต์ 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
			<li>
				<label for="no"><input type="radio" required="" name="loans" value="2" id="no"></label>
				สินเชื่อรถเพื่อการเกษตร 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
			<li>
				<label for="no"><input type="radio" required="" name="loans" value="3" id="no"></label>
				สินเชื่อโฉนดที่ดิน 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
			<li>
				<label for="no"><input type="radio" required="" name="loans" value="4" id="no"></label>
				สินเชื่อส่วนบุคคล 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
			<li>
				<label for="no"><input type="radio" required="" name="loans" value="5" id="no"></label>
				สินเชื่อนาโนไฟแนนซ์ 
				<div class="b-t-r"><span class="percent">15%</span><span class="num-vote">( 999 vote )</span></div>
			</li>
		</ul>
		
	</div>



	<?php
	// $result = $file_db->query('SELECT * FROM trn_poll');
	// foreach ($result as $result) {
	// 	echo $result['index'];
	// 	echo $result['choice'];
	// 	echo $result['point'].'</br>';
	// }
	?>
</body>
</html>

