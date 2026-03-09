<?php
include 'db.php';

$sales = $conn->query("SELECT SUM(total) as total_sales FROM sales");
$sales_data = $sales->fetch_assoc();

$expenses = $conn->query("SELECT SUM(amount) as total_expenses FROM expenses");
$expense_data = $expenses->fetch_assoc();

$profit = $sales_data['total_sales'] - $expense_data['total_expenses'];
?>

<h1>Dashboard</h1>

<p>Total Sales: ₹ <?php echo $sales_data['total_sales']; ?></p>

<p>Total Expenses: ₹ <?php echo $expense_data['total_expenses']; ?></p>

<p>Profit: ₹ <?php echo $profit; ?></p>

<a href="index.html">Back</a>
