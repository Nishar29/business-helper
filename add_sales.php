<?php
include 'db.php';

if(isset($_POST['submit'])){

$product=$_POST['product'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$total=$qty*$price;

$sql="INSERT INTO sales(product_name,quantity,price,total)
VALUES('$product','$qty','$price','$total')";

$conn->query($sql);
}

?>

<h2>Add Sales</h2>

<form method="POST">

Product Name
<input type="text" name="product" required>

Quantity
<input type="number" name="qty" required>

Price
<input type="number" name="price" required>

<button name="submit">Save</button>

</form>
