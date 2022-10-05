<?php require_once("header.php"); ?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

  
  
<?
  
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
      

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
