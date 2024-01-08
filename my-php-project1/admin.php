<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <h3>Add Product</h3>
    <form action="add_product.php" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
