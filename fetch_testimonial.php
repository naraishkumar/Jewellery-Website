<?php
include('inc/header/config.php'); 
//include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/functions.php';


function get_testimonial_by_index($tbl_name, $index) {
    global $conn;
    $query = "SELECT * FROM $tbl_name LIMIT $index, 1";
    $result = $conn->query($query);
    if ($result) {
        $results = $result->fetch_assoc();
        if ($results) {
            return $results;
        } else {
            return null;
        }
    } else {
        return null;
    }
}

header('Content-Type: application/json');

if (isset($_GET['index'])) {
    $index = intval($_GET['index']);
    $tbl_name = 'tbl_testimonial';
    $testimonial = get_testimonial_by_index($tbl_name, $index);
    if ($testimonial) {
        echo json_encode($testimonial);
    } else {
        echo json_encode(['error' => 'No testimonial found']);
    }
} else {
    echo json_encode(['error' => 'Index not specified']);
}
?>

