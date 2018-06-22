<?php
	// $sender_name = stripslashes($_POST["sender_name"]);
	// $sender_email = stripslashes($_POST["sender_email"]);
	// $sender_message = stripslashes($_POST["sender_message"]);
	// $response = $_POST["g-recaptcha-response"];
	// echo $_POST["g-recaptcha-response"];
	// $url = 'https://www.google.com/recaptcha/api/siteverify';
	// $data = array(
	// 	'secret' => '6LcmUF4UAAAAAHCnRa7LqPSPlNckgFcEASwCaoUG',
	// 	'response' => $_POST["g-recaptcha-response"]
	// );
	// $options = array(
	// 	'http' => array (
	// 		'method' => 'POST',
	// 		'content' => http_build_query($data)
	// 	)
	// );
	// $context  = stream_context_create($options);
	// $verify = file_get_contents($url, false, $context);
	// $captcha_success=json_decode($verify);

	// if ($captcha_success->success==false) {
	// 	echo "<p>You are a bot! Go away!</p>";
	// } else if ($captcha_success->success==true) {
	// 	echo "<p>You are not not a bot!</p>";
	// }

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret'   => '6LcmUF4UAAAAAHCnRa7LqPSPlNckgFcEASwCaoUG',
    'response' => $_POST["g-recaptcha-response"],
]));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

curl_close($ch);

$response = @json_decode($data);

if ($response && $response->success)
{
	echo 'you are not bot.';
    // validation succeeded, user input is correct
}
else
{
	echo 'you are bot';
    // response is invalid for some reason
    // you can find more in $data->{"error-codes"}
    //echo $data->{"error-code"};
}

?>