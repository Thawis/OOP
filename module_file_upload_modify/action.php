<?php
if(isset($_POST['submit'])){
 // Count total files
	$countfiles = count($_FILES['files']['name']);
	echo $countfiles.'</br>';
 // Looping all files
	for($i=0;$i<$countfiles;$i++){
		$filename = $_FILES['files']['name'][$i];
		echo $filename.'</br>';
   // Upload file
		// move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);

	}
} 
?>