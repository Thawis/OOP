<?php 
setcookie('showstuff', true,  time()+86400);
setcookie("showstuff",true, time()-86400);
if(!isset($_COOKIE['showstuff'])){
	echo 'not have cookie';
}else{
	echo 'have cookie';
}
// setcookie('showstuff', true,  time()+86400);

?>