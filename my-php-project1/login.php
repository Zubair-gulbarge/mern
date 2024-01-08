<?php
// This is a simple example. In a real application, use secure authentication methods.
$superuser = ['username' => 'admin', 'password' => 'admin123'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $superuser['username'] && $password == $superuser['password']) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
