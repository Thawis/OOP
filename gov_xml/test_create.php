<?php 
$myfile = fopen("newfile.txt","w") or die ("");
$txt = "test1";
fwrite($myfile,$txt);
$txt = "test2";
fwrite($myfile,$txt);
fclose($myfile);
 ?>