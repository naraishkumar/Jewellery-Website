<?php
// Check if session is set
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Display dashboard content
echo "Welcome, " . $_SESSION["username"] . "!";

// Logout link
echo "<p><a href='logout.php'>Logout</a></p>";





// include 'includes/header/header.php';
// if(!isset($_SESSION['username']))
// {
//     $_SESSION['username'] = "login first to Access Dashboard";
//     header("location:login.php");
// }

?>
