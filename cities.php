<?php require_once("header.php"); ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th>City Name</th>
      <th>Basketball Team</th>
      <th>Football Team</th>
      <th>Baseball Team</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $iid = $_GET['id'];
    
    $sql = "SELECT c.city_ID,Abbreviation ,fullname, Baseball_name, football_name,Team_Name FROM Baseball b join Football f on b.city_ID =f.city_ID join City c on f.city_ID =c.city_ID join Basketball ba on c.city_ID = ba.city_ID where c.city_ID= . $iid order by c.city_ID";
$result = $conn->query($sql);
