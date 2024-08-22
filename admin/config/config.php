<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "jewellery-website";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//define('WPENT_ADMIN_BASE_URL', __DIR__)
// function wpent_admin_base_url($file_path = ''){
//   return __DIR__;
// }


?>