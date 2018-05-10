<?php 
require_once 'config.php';
require_once 'connection.php';

// $name = 'ExampleFile.pdf';
// $name = 'u1.jpg';
// $name = '20171027155047094_0001.jpg';
// $path = 'Upload/doc/'.$name;

// if(!$path){
// 	die('file not found');
// }else{
// 	header("Cache-Control: public");
// 	header("Content-Description: File Transfer");
// 	header("Content-Disposition: attachment; filename=$name");
// 	header("Content-Type: appli cation/zip");
// 	header("Content-Transfer-Encoding: binary");
//     //read the file from disk
// 	readfile($file);
// }

// header('Content-Type: application/pdf');
// header("Content-Transfer-Encoding: Binary");
// header("Content-disposition: attachment; filename=".$path);
// readfile($path);


// header('Content-Type: application/imgage');
// header("Content-Transfer-Encoding: Binary");
// header("Content-disposition: attachment; filename=".$path);
// readfile($path);

$sql = "SELECT * FROM news LEFT JOIN file ON news.ArticleID = file.ArticleID
WHERE news.CategoryID = 4
ORDER BY news.PublishDate DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>TEST Download File</title>
</head>
<body>
	<?php
		while ($result = $stmt->fetch()) { 
			$path = $result['File_Path'].$result['File_Name'];
			$ID = $result['ArticleID'];
			?>
		<a href="<?=$path?>" download target="_blank">Click here to download <?=$ID?></a></br>
	<?php	} ?>

	<!-- <a href="<?=$path?>" download target="_blank">Click here to download</a> -->
</body>
</html>