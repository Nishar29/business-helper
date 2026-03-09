<?php
$conn = new mysqli("localhost","root","","business_helper");

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>
