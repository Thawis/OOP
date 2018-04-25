<?php
$arr = array();
$i = 0;
try {
	$file_db = new PDO('sqlite:myDatabase.sqlite3');
	//$memory_db = new PDO('sqlite::memory:');   
} catch(PDOException $e) {
	echo $e->getMessage();
}
$result = $file_db->query('SELECT * FROM tb_question WHERE id > 0');
foreach ($result as $result) {
	$arr[$i]['name'] = $result['name'];
	$arr[$i]['point'] = $result['valuepoint'];
	$i++;
}
echo json_encode($arr);
?>