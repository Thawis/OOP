<?php
// header('Content-type: image/jpeg');
// $image = new \Imagick(realpath('n.jpg'));
// //$image->thumbnailImage(1080, 720);
// $image->blueShiftImage(1.5);
// echo $image;

// $im = new \Imagick(realpath('test.pdf'));
// $im->setImageFormat( "jpg" );
// header( "Content-Type: image/jpeg" );
// echo $im;


// เลือกหน้า

$im = new \Imagick(realpath('test.pdf')."[0]");
$im->setImageFormat( "jpg" );
header( "Content-Type: image/jpeg" );
echo $im;
?>