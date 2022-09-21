<?php
$servername = "localhost";
$username = "trileyou_rile0056";
$password = "T833481t!";

  

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["prefix"]. " - Name: " . $row["number"]. " " . $row["description"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
