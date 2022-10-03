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


$sql = "SELECT city_ID,Abbreviation, fullname from City order by city_ID";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
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



