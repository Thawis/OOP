<?php 
$options = [
    'cost' => 11,
    //'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
//echo password_hash("p@ssw0rd", PASSWORD_BCRYPT, $options);
$password = 'p@ssw0rd';
$encrypt = '$2y$11$fOUqFV07/ADjaX2FJZ4qr.euWIBh5RAsvrl3pvRitwmH7COSC.X8C';
if(password_verify($password,$encrypt)){
  echo 'pass correct';
}else{
  echo 'pass not correct';
}
?>