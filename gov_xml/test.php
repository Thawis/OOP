<?php 
$doc = new DOMDocument();
$doc->load ('899.xml');
$public_date = $doc->getElementsByTagName("public_date_th")->item(0);
echo $public_date;
?>