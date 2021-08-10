<?php
    include "navigation.php";
?>

<div class="table-responsive-md">
<table class="table" method="post">

  <thead class="thead-light">
    <tr>
      <th scope="col">A/C NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">BALANCE</th>
      <th scope="col">VIEW DETAILS</th>
    </tr>
  </thead>

<?php
    $conn = mysqli_connect("localhost","root", "", "basic banking sys project") or die("Connection Failed");

    $sql = "SELECT * FROM details";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        
?>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $row['id']; ?> </th>
      <td> <?php echo $row['name']; ?> </td>
      <td> <?php echo $row['balance']; ?> </td>
      <td> <a class="btn btn-success" href='acc_details.php?id=<?php echo $row['id']; ?>'>Click Here</a> </td>
    </tr>
    <?php
        }
    }
    mysqli_close($conn);
   ?>

  </tbody>

</table>

</div>



<?php
    include "footer.php";
?>