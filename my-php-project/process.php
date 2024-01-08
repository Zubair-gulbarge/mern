<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can perform additional validation or processing here

    // Display the submitted data (you can save it to a database instead)
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
} else {
    // Handle invalid requests
    echo "Invalid request!";
}
?>
