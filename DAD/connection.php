<?php 

$conn = null; 
try { 
	
	$conn = new PDO ("mysql:host="._DATA_BASE_HOST_.";dbname="._DATA_BASE_NAME_,_DATA_BASE_USER_,_DATA_BASE_PASS_); 
	$conn-> exec("SET CHARACTER SET utf8");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) { 
	echo $e;
}

?>