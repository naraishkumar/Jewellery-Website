<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Jewelry System</title>
    <link rel="stylesheet" href="<?php echo '/jewellery-website/admin/css/main.css'; ?>" >
    <link rel="stylesheet" href="<?php echo 'jewellery-website/admin/css/responsive.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>
<script src="<?php $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/js/admin.css'?>"></script>

<?php 

session_start();

if(!isset($_SESSION['username']))
{
    $_SESSION['auth_status'] = "login first to Access Dashboard";
    header("location:login.php");
}

include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/config/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/functions.php';
include $_SERVER['DOCUMENT_ROOT'].'/jewellery-website/admin/includes/header/nav.php';

