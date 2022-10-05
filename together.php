<?php require_once("header.php"); ?>

<?
$sql = "SELECT c.city_ID,Abbreviation ,fullname, Baseball_name, football_name,ba.Team_Name FROM Baseball b join Football f on b.city_ID =f.city_ID join City c on f.city_ID =c.city_ID join Basketball ba on c.city_ID = ba.city_ID order by c.city_ID";
$result = $conn->query($sql);

 ?> <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">City ID</th>
      <th scope="col">Abbreviation</th>
      <th scope="col">Name</th>
      <th scope="col">Baseball Team</th>
     <th scope="col">Football Team</th>
     <th scope="col">Basketball Team</th>
    </tr>
  </thead>
</table>
<?php

   ?> <table class="table">
  <tbody>


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
    <tr>
      <th scope="row"><?=$row["city_ID"]?></th>
      <td><?=$row["Abbreviation"]?></td>
      <td><?=$row["fullname"]?></td>
      <td><?=$row["Baseball_name"]?></td>
      <td><?=$row["football_name"]?></td>
      <td><?=$row["ba.Team_Name"]?></td>
    </tr>

  }
     </tbody>
</table>
<?php
} else {
  echo "0 results";
}



