<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="cartstyle.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">                    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>HEALET-Cart</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    text-decoration: none;
}

body{
    color: white;
}
/* MAIN CONTAINER */
.main-container{
    max-width: 1440px;
}
      #container{
    height: 100px;
    width: 100%;
    background-color: rgb(189, 189, 189);
    
}
      .nav{
    display: flex;
    justify-content: space-between;
    padding: 30px 25px 0 25px;
    margin-bottom:100px;
}
.center-nav-bar{
display: flex;
}
.center-nav-bar a{
    font-family: 'Poppins';
    padding: 0 10px;
    font-size: 18px;
    color: #fff;
    text-shadow: 0  white;
    text-decoration: none;
}
.hover-line{
    height: 3px;
    margin-top:10px;
    background-color: white;
    width: 1%;
    border-radius: 3px;
    visibility:hidden;
    transition: 0.2s;
}
.center-nav-bar a:hover .hover-line{
    width: 100%;
    visibility: visible;
    transition: 0.2s;
    background-image: linear-gradient(to right, #fff,#ffff);
}

    </style>
</head>
<body>
  <?php //include 'inc/header/nav.php'; ?> </div>
<section class="h-100 h-custom" style="background-color: #F8F8FF">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0">Registraion</h1>
                    
                  </div>
                  <hr class="my-4">

                  <form action="insert_registration.php" method="POST" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" id="name"  value="" class="form-control" name="name" required ><br>
                    <label for="email">Email</label>
                    <input type="text" id="email" value="" class="form-control" name="email" required><br>
                    <label for="address">Address</label>
                    <input type="text" id="address" value="" class="form-control" name="address" required ><br>
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" value="" class="form-control" name="phone" required><br>
                    <input type="hidden" name="redirect_url" value="checkout.php">
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                  </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
