<?php 

$tbl_name = 'tbl_home_images';
$images = images($tbl_name);
echo json_encode($images); 

?>