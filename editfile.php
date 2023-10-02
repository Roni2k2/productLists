<?php
   
    $conn = new mysqli("localhost", "root", "productLists");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $product_name = $row['name'];
            $product_description = $row['description'];
            $product_price = $row['price'];
        } else {
            echo "Product not found.";
            exit();
        }
    } else {
        echo "Product ID not provided.";
        exit();
    }
    ?>