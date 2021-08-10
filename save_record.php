<?php

$holder_name = $_POST['name'];
$holder_phone = $_POST['phone'];
$holder_address = $_POST['address'];
$holder_bal = $_POST['amount'];

$conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

$sql = "INSERT INTO details(name, balance, phone, address) VALUES ('{$holder_name}' , '{$holder_bal}' , '{$holder_phone}', '{$holder_address}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Basic%20Banking%20System/view.php");
mysqli_close($conn);

?>