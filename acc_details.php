<?php

include "navigation.php";

$ac_no = $_GET['id'];

$conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

$sql = "SELECT * FROM details WHERE id='{$ac_no}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    
?>

<div class="user-details d-flex justify-content-center">

    <img class="user-dp" src="Images/user.jpg" alt="Profile Picture">
    <div class="user-info d-flex align-items-center">
        <ul>
            <li>Name : <?php echo $row['name']; ?></li>
            <li>Balance : <?php echo $row['balance']; ?></li>
            <li>Phone no. : <?php echo $row['phone']; ?></li>
            <li>Address : <?php echo $row['address']; ?></li>
        </ul>
    </div>

</div>

<div class="d-flex justify-content-center">
    <a class="btn btn-success" href="add.php">DEPOSIT MONEY</a>
</div>
&nbsp;
<div class="d-flex justify-content-center">
    <a class="btn btn-success" href="transfer.php">TRANSFER MONEY</a>
</div>


<?php
    }
}
?>

<?php include "footer.php" ?>