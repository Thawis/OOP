<?php 
// require_once 'config.php';
// require_once 'connection.php';

// $name = 'ExampleFile.pdf';
// $name = 'u1.jpg';
// $name = '20171027155047094_0001.jpg';
$name = 'dex.pdf';
$path = 'Upload/doc/'.$name;
$newsname = 'ใบแก้โปรเจค.pdf';

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

header('Content-Type: application/pdf');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=".$newsname);
readfile($path);


// header('Content-Type: application/imgage');
// header("Content-Transfer-Encoding: Binary");
// header("Content-disposition: attachment; filename=".$path);
// readfile($path);

// $sql = "SELECT * FROM news LEFT JOIN file ON news.ArticleID = file.ArticleID
// WHERE news.CategoryID = 4
// ORDER BY news.PublishDate DESC";

// $stmt = $conn->prepare($sql);
// $stmt->execute();

?>