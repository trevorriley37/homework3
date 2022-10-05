<?php require_once("header.php"); ?>


      

  <?php
  $sql = "SELECT c.city_ID,Abbreviation ,fullname, Baseball_name, football_name,Team_Name FROM Baseball b join Football f on b.city_ID =f.city_ID join City c on f.city_ID =c.city_ID join Basketball ba on c.city_ID = ba.city_ID where fullname=" .  $name;
$result = $conn->query($sql);
  
  
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["fullname"]?></td>
    <td><?=$row["Team_Name"]?></td>
    <td><?=$row["football_name"]?></td>
    <td><?=$row["Baseball_name"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
    
$conn->close();
?>

</body>
</html>
