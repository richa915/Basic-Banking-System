<?php

$sender = $_POST['from'];
$recieve = $_POST['to'];
$amount = $_POST['amnt'];

$conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

            // Updating Sender's Record 
$sql1 = "SELECT * FROM details WHERE name='{$sender}'";
$result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
$row1 = mysqli_fetch_assoc($result1);

if($row1['balance'] > 0){
    $newbal = $row1['balance'] - $amount;
}
else{
    echo "<h2>Insufficient Balance</h2>";
    die();
}

$sql1_done = " UPDATE details 
               SET balance = '{$newbal}' 
               WHERE name = '{$sender}' ";
$result1_done = mysqli_query($conn, $sql1_done) or die("Query Unsuccessful");


            //Updating Reciever's Record
$sql2 = "SELECT * FROM details WHERE name='{$recieve}'";
$result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful");
$row2 = mysqli_fetch_assoc($result2);

$updated_bal = $row2['balance'] + $amount;

$sql2_done = " UPDATE details 
                SET balance = '{$updated_bal}' 
                WHERE name = '{$recieve}' ";
$result2_done = mysqli_query($conn, $sql2_done) or die("Query Unsuccessful");

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$sql_add = "INSERT INTO history(from_acc, to_acc, amount, date_time) VALUES ('{$sender}' , '{$recieve}' , '{$amount}', '{$date}')";
mysqli_query($conn, $sql_add) or die("Query Unsuccessful");

header("Location: http://localhost/Basic%20Banking%20System/history.php");
mysqli_close($conn);

?>