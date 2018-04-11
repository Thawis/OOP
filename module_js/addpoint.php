<?php 
$choice = $_GET['choice'];
$data = json_decode(file_get_contents('data3.json'));
if($choice == "verygood"){
	$point = intval($data->verygood);
	$point++;
	$data->verygood = $point;
	$newJsonString = json_encode($data);
	if(file_put_contents('data3.json', $newJsonString)){
		echo 'ok';
	}else{
		echo 'not';
	}
}else if($choice == "good"){
	$point = intval($data->good);
	$point++;
	$data->good = $point;
	$newJsonString = json_encode($data);
	if(file_put_contents('data3.json', $newJsonString)){
		echo 'ok';
	}else{
		echo 'not';
	}
}else if($choice == "normal"){
	$point = intval($data->normal);
	$point++;
	$data->normal = $point;
	$newJsonString = json_encode($data);
	if(file_put_contents('data3.json', $newJsonString)){
		echo 'ok';
	}else{
		echo 'not';
	}
}else if($choice == "bad"){
	$point = intval($data->bad);
	$point++;
	$data->bad = $point;
	$newJsonString = json_encode($data);
	if(file_put_contents('data3.json', $newJsonString)){
		echo 'ok';
	}else{
		echo 'not';
	}
}else if($choice == "verybad"){
	$point = intval($data->verybad);
	$point++;
	$data->verybad = $point;
	$newJsonString = json_encode($data);
	if(file_put_contents('data3.json', $newJsonString)){
		echo 'ok';
	}else{
		echo 'not';
	}
}
$data->verygood = 8;

// Encode and save!
// $newJsonString = json_encode($data);
// file_put_contents('data3.json', $newJsonString);

// $data = json_decode(file_get_contents('data3.json'));
// print_r($data);
?>