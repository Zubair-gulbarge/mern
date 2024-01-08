<?php
// This is a simple example. In a real application, use a database to store products.
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];

    // Store product in a session variable for simplicity
    $_SESSION['products'][] = ['name' => $product_name, 'price' => $price];

    echo "Product added successfully!";
}
?>
