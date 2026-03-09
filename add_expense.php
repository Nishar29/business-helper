<?php
include 'db.php';

if(isset($_POST['submit'])){

$type=$_POST['type'];
$amount=$_POST['amount'];

$sql="INSERT INTO expenses(expense_type,amount)
VALUES('$type','$amount')";

$conn->query($sql);
}

?>

<h2>Add Expense</h2>

<form method="POST">

Expense Type
<input type="text" name="type" required>

Amount
<input type="number" name="amount" required>

<button name="submit">Save</button>

</form>
