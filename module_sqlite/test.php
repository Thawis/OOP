<?php 
// Create or open a database file
try {
	$file_db = new PDO('sqlite:myDatabase.sqlite3');
	//$memory_db = new PDO('sqlite::memory:');   
} catch(PDOException $e) {
	echo $e->getMessage();
}
$result = $file_db->query('SELECT * FROM tb_question');
foreach ($result as $result) {
	echo $result['id'];
	echo $result['name'];
	echo $result['valuepoint'].'</br>';
}
?>