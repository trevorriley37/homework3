<?php require_once("header.php"); ?>


<?

$sql = "SELECT city_ID,football_name from Football order by city_ID";
$result = $conn->query($sql);

 ?> <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">City ID</th>
      <th scope="col"></th>
      <th scope="col"> Team Name</th>
      
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
 
     ?> <table class="table table-dark table-striped" align="center">
               
  <thead>
    
  </thead>
  <tbody>
    <tr>
     
    <th scope="row"><?=$row["city_ID"]?></th> 
     <td> <?=$row["football_name"]?></td>
     <align="right">
    </tr>
  </tbody>
</table>
<?php
  }
} else {
  echo "0 results";
}
