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


$result = mysqli_query($con,"SELECT * FROM Courses");

echo "<table border='1'>
<tr>
<th>prefix</th>
<th>number</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['prefix'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
