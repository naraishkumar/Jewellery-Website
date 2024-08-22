<?php
include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/inc/header/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/functions.php';


if (isset($_POST['email'])){

    $email = $_POST["email"];
    $query = "SELECT * FROM tbl_newsletter_subscribers WHERE email = '$email' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo json_encode(array('exists' => true));
    }
    else
    {    
        $fields = [
            'email' => 'email',
        ];
        $is_api_json = 1;
        $tbl_name = 'tbl_newsletter_subscribers';
        insert_record($tbl_name, $fields, $is_api_json);        
    }    
}
?>