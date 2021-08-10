<?php
    include "navigation.php";
?>

<div class="container createform">

    <h2>Welcome to Citizen's Bank !</h2>&nbsp;
    <h3>Create Account :</h3>&nbsp;

<form action="save_record.php" method="post">

  <div class="form-row">
    <div class="col-md-5">
      <label>A/C Holder Name :</label>
      <input type="text" class="form-control" name="name" value="" >
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-3">
      <label>Phone no. :</label>
      <input type="tel" class="form-control" name="phone" value="" >
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-12">
    <label >Address :</label>
    <input type="text" class="form-control" name="address" value="" >
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4">
      <label >Amount to be Deposited(INR) : </label>
      <input type="number" class="form-control" name="amount" value="">
    </div>
  </div>
 
    <div class="form-row">
        <div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                I agree to the Terms & Conditions.
            </label>
        </div>  
        </div>   
    </div>
    
    <div class="form-row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success">Done</button>
        </div>   
    </div>
</form>

</div>


<?php
    include "footer.php";
?>