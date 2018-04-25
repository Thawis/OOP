<?php 
date_default_timezone_set('Asia/Bangkok');

$time1 = '2018-02-14';
//$format = 'datetime';
echo DBToFrom($time1,'date');








function DBToFrom($date,$format = 'date'){     // 2560-06-20 => 28/12/2016
    if($format == 'datetime'){
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $date->format('d/m/Y H:i');
    }else{
        $date = DateTime::createFromFormat('Y-m-d', $date);
        return $date->format('d/m/Y');
    }
}

 ?>