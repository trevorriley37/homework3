<?php require_once("header.php"); ?>



SELECT c.city_ID,Abbreviation ,fullname, Baseball_name, football_name,ba.Team_Name FROM Baseball b join Football f on b.city_ID =f.city_ID join City c on f.city_ID =c.city_ID join Basketball ba on c.city_ID = ba.city_ID order by c.city_ID
