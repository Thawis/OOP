<?php
echo "gratisography-341H.jpg:<br />\n";
$exif = exif_read_data('gratisography-341H.jpg', 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data('gratisography-341H.jpg', 0, true);
echo "gratisography-341H.jpg:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
print_r($exif);
?>