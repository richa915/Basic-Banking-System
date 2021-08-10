<?php
    include "navigation.php";
?>
<?php

if(isset($_POST['added'])){
    $conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

    $user = $_POST['name'];
    $amount = $_POST['amnt'];
        
    $sql = "SELECT * FROM details WHERE name='{$user}'";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    $row = mysqli_fetch_assoc($result);

    $updated_bal = $row['balance'] + $amount;

    $sql1 = " UPDATE details 
                    SET balance = '{$updated_bal}' 
                    WHERE name = '{$user}' ";
    $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
    
    header("Location: http://localhost/Basic%20Banking%20System/view.php");

    mysqli_close($conn);
}

?>

<div class="container transfer-form">

    <h2>Welcome to Citizen's Bank !</h2>&nbsp;
    <h3 class="d-flex justify-content-center">Deposit Money :</h3>&nbsp;

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <div class="form-row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <label>Enter Name :</label>
      <input type="text" class="form-control" name="name" placeholder="e.g. Vinna">
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="form-row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <label>Enter Amount :</label>
      <input type="number" class="form-control" name="amnt" placeholder="e.g. 500">
    </div>
    <div class="col-md-4"></div>
  </div>

    
    <div class="form-row">
        <div class="col-md-12 d-flex justify-content-center">
            <button type="submit" name="added" class="btn btn-success">Done</button>
        </div>   
    </div>
</form>

</div>

<?php
    include "footer.php";
?>