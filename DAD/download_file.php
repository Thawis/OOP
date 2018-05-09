<?php 
// $name = 'ExampleFile.pdf';
$name = 'u1.jpg';
$path = 'Upload/doc/'.$name;

// if(!$path){
// 	die('file not found');
// }else{
// 	header("Cache-Control: public");
// 	header("Content-Description: File Transfer");
// 	header("Content-Disposition: attachment; filename=$name");
// 	header("Content-Type: application/zip");
// 	header("Content-Transfer-Encoding: binary");
//     //read the file from disk
// 	readfile($file);
// }

// header('Content-Type: application/pdf');
// header("Content-Transfer-Encoding: Binary");
// header("Content-disposition: attachment; filename=".$path);
// readfile($path);

?>

<!DOCTYPE html>
<html>
<head>
	<title>TEST Download File</title>
</head>
<body>
	<a href="<?=$path?>" download target="_blank">Click here to download</a>
</body>
</html>