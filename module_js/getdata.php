<?php
$arr = array();
$data = json_decode(file_get_contents('data3.json'));
//print_r($data);
$arr["verygood"] = $data->verygood;
$arr["good"] = $data->good;
$arr["normal"] = $data->normal;
$arr["bad"] = $data->bad;
$arr["verybad"] = $data->verybad;

echo json_encode($arr);
?>