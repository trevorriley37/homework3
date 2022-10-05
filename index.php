<?php require_once("header.php"); ?>

<?php



$sql = "SELECT city_ID,Abbreviation, fullname from City order by city_ID";
$result = $conn->query($sql);

 ?> <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">City ID</th>
      <th scope="col"></th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
    
    </tr>
  </tbody>
</table>
<?php




if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
     ?> <table class="table table-dark table-striped"
               align="center">
  <thead>
    
  </thead>
  <tbody>
    <tr>
     
    <th scope="row"><?=$row["city_ID"]?></th>
      <td><?=$row["Abbreviation"]?></td>
      <td><?=$row["fullname"]?></td>
    </tr>
  </tbody>
</table>
<?php
  }
} else {
  echo "0 results";
}



