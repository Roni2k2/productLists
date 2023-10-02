<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product Update</title>
</head>
<body>
    <h2>Update Product List</h2>
<form action="update.php" method="post">
        <input type="hidden" name="product_id" value=""><br>

        <label for="name">Product Name:</label><br>
        <input type="text" name="name" id="name" value=""><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="text" name="price" id="price" value=""><br><br>

        <input type="submit" value="Update Product">
    </form>
</body>
</html>