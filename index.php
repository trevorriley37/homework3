<?php require_once("header.php"); ?>

<?php
$servername = "localhost";
$username = "trileyou_rile0056";
$password = "T833481t!";
$dbname = "trileyou_database1";
  

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT Abbreviation, fullname from City";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Abbreviation"]?></td>
    <td><?=$row["fullname"]?></td>
    
  </tr>
<?php
  }
} else {
  echo "0 results";
}

echo "<table >
  <tr>
    <td >Abbreviation </td>
    <td >Full Name</td>
    <td >Email</td>
    <td >Role</td>
  </tr>";

  while($row = mysqli_fetch_array($run, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>".$row['Abbreviation']."</td>";
  echo "<td>".$row['fullname']."</td>";
  echo "</tr>";
  echo "</table>";}

 }


?>

