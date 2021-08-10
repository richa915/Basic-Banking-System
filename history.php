<?php

  include "navigation.php";

?>

<div class="table-responsive-md">
<table class="table">

  <thead class="thead-light">
    <tr>
      <th scope="col">S.NO.</th>  
      <th scope="col">FROM</th>
      <th scope="col">TO</th>
      <th scope="col">AMOUNT</th>
      <th scope="col">DATE & TIME</th>
    </tr>
  </thead>

  <?php

  $conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

  $sql = "SELECT * FROM history";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
    
  ?>

  <tbody>
    <tr>
      <td><?php echo $row['sno']; ?></td>
      <td><?php echo $row['from_acc']; ?></td>
      <td><?php echo $row['to_acc']; ?></td>
      <td><?php echo $row['amount']; ?></td>
      <td><?php echo $row['date_time']; ?></td>
    </tr>    
  </tbody>

  <?php 
      }
  }
  ?>

</table>
</div>


<?php
    include "footer.php";
?>