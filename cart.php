<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $quantity = intval($_POST['quantity']);

    // Initialize the cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    
    if (isset($_SESSION['cart'][$product_id])) {        
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } 
    else 
    {    
        $_SESSION['cart'][$product_id] = [
            'id' => $product_id,
            'name' => $product_name,
            'description' => $product_description,
            'price' => $product_price,
            'image' => $product_image,
            'quantity' => $quantity
        ];
    }
}

header('Location: cart_view.php'); 
exit;
?>