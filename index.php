

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


$sql = "SELECT prefix, number,description from course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["prefix"]?></td>
    <td><?=$row["number"]?></td>
    <td><?=$row["description"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}

?>
