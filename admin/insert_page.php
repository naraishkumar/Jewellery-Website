<?php
include 'includes/header/header.php';
//include 'css/vendor/quill.snow.css';

    // $fields = [
    //     'page_name' => 'page_name',
    //     'page_code' => 'page_code',
    // ];

    // $tbl_name = 'tbl_pages';
    // insert_record($tbl_name, $fields);

    //include 'js/vendor/quill';

?>
<?php

if (isset($_POST['submit_add'])) {
    // Get form data
    $page_name = $_POST['page_name'];
    $page_content = $_POST['page_content'];
    $redirect_url = $_POST['redirect_url'];

    // Validate data
    if (!empty($page_name) && !empty($page_content)) {
        // Insert data into database
        $sql = "INSERT INTO tbl_pages (page_name, content) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $page_name, $page_content);

        if ($stmt->execute()) {
            // Redirect to the specified URL after successful insertion
            header("Location: $redirect_url");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill all fields.";
    }

    $conn->close();
}
?>
