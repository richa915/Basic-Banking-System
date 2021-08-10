<?php
    include "navigation.php";
?>

<div class="container transfer-form">

    <h2>Welcome to Citizen's Bank !</h2>&nbsp;
    <h3 class="d-flex justify-content-center">Transfer Money :</h3>&nbsp;

<form action="modify_balance.php" method="post">

  <div class="form-row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <label>Transfer From :</label>
      <input type="text" class="form-control" name="from" placeholder="A/C Holder Name">
    </div>

    <div class="col-md-4"></div>
  </div>

  <div class="form-row">
    <div class="col-md-4"></div>

    <div class="col-md-4 d-flex justify-content-center">
      <img src="Images/transfer.png" class="transfer-img">
    </div>

    <div class="col-md-4"></div>
  </div>

  <div class="form-row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <label>Transfer To :</label>
      <input type="text" class="form-control" name="to" value="" placeholder="A/C Holder Name">
    </div>

    <div class="col-md-4"></div>
  </div>

  <div class="form-row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <label>Amount :</label>
      <input type="text" class="form-control" name="amnt" value="" placeholder="Enter Amount e.g. 500">
    </div>

    <div class="col-md-4"></div>
  </div>
  
  
    
    <div class="form-row">
        <div class="col-md-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Done</button>
        </div>   
    </div>
</form>

</div>



<?php
    include "footer.php";
?>