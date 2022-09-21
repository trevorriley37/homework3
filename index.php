<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php

<?php
$servername = "localhost";
$username = "trileyou_rile0056";
$password = "T833481t!";
$dbname = "trileyou_database1"
  

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT prefix,number,description FROM course";
$result = $conn->query($sql);

if ($result->num_rows = 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["prefix"]. " - Name: " . $row["number"]. " " . $row["description"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
