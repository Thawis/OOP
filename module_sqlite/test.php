<?php 
// DateTimeZone
$dt = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
$today = $dt->format("d-m-Y h:i:s");
echo $today;
// Create or open a database file
try {
	$file_db = new PDO('sqlite:mydata.db');
	//$memory_db = new PDO('sqlite::memory:');   
} catch(PDOException $e) {
	echo $e->getMessage();
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
		<input type="submit" id="btn_submit" value="Submit" />
	</form>
	<?php 
$sql = 'UPDATE trn_poll SET point = point + 1 WHERE poll_index = 3';
$stmt = $file_db->prepare($sql);
$stmt->execute();
$arr = $stmt->errorInfo();
print_r($arr);




	$result = $file_db->query('SELECT * FROM trn_poll');
	foreach ($result as $result) {
		echo $result['poll_index'];
		echo $result['choice'];
		echo $result['point'].'</br>';
	}
	?>
</body>
</html>

