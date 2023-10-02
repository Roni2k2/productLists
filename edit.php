<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="editfile.php" method="post">
        
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            
        <label for="name">Product Name:</label><br>
        <input type="text" name="name" id="name" value="<?php echo $product_name; ?>"><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"><?php echo $product_description; ?></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="text" name="price" id="price" value="<?php echo $product_price; ?>"><br><br>

        <input type="submit" value="Update Product">
    </form>
</body>
</html>
