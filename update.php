<?php
$conn = mysqli_connect("localhost","root","", "productLists");

if(isset($_POST['update'])) {

$sql = "SELECT * FROM product_detalis"; 

$query = "UPDATE product_detalis SET name='$_POST[name]', description='$_POST[description]', 
price='$_POST[price]' WHERE id='$_POST[product_id]'" ;

$link = mysqli_connect($conn,$query);


}

?>

