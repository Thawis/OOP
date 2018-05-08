<?php 
$name = 'ใบแก้โปรเจค onecomputer';
$path = 'Upload/doc/'.$name;

if(!$path){
	die('file not found');
}else{
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=$name");
	header("Content-Type: application/zip");
	header("Content-Transfer-Encoding: binary");
    // read the file from disk
	readfile($file);
}

?>