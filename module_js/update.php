<?php

// // Define the file here
// define('JSON_FILE', 'data2.json');

// // Create the empty file
// if(!file_exists(JSON_FILE)) {
//     $int_bytes = file_put_contents(JSON_FILE, json_encode((object)[
//         'events' => ['First entry']
//     ]));
//     echo "Wrote {$int_bytes} bytes to new file", PHP_EOL;
// }

// // Load and decode
// $obj_data = json_decode(file_get_contents(JSON_FILE));

// // Show the data after loading
// print_r($obj_data);

// // // Set some data
// $obj_data->awesome = true;
// $obj_data->name = "tom";

// // Add an event to the array
// $obj_data->events[] = "Event at " . time();

// // Show the data before saving
// print_r($obj_data);

// // Encode and save!
// $int_bytes = file_put_contents(JSON_FILE, json_encode($obj_data));

// echo "Wrote {$int_bytes} bytes", PHP_EOL;


// foreach ($data as $key => $entry) {
//     if ($entry['activity_code'] == '1') {
//         $data[$key]['activity_name'] = "TENNIS";
//     }
// }

//$jsonString = fill_get_contents('data2.json');
$data = json_decode(file_get_contents('data3.json'));
print_r($data);
$data->verygood = 8;
echo '</br>'. $data->verygood.'</br>';

// Encode and save!
$newJsonString = json_encode($data);
file_put_contents('data3.json', $newJsonString);

$data = json_decode(file_get_contents('data3.json'));
print_r($data);

// $newJsonString = json_encode($data);
// file_put_contents('jsonFile.json', $newJsonString);
// print_r($data);
?>