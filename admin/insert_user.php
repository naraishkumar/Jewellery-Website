<?php
include 'includes/header/header.php';

$fields = [
    'username' => 'username',
    'password' => 'password',
];
$tbl_name = 'tbl_users';
insert_record($tbl_name, $fields);

?>