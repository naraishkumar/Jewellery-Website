<?php
 include 'config/config.php';
 include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/functions.php';

$fields = [
    'name' => 'name',
    'email' => 'email',
    'address' => 'address',
    'phone' => 'phone',

];
$tbl_name = 'tbl_orders';
insert_record($tbl_name, $fields);

?>