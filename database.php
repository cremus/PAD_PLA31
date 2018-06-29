<?php
//Om te connecten naar de MySQl server worden de volgende parameters gebruikt
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "pad";
$port = "3307";

//Conectie wordt gemaakt met de database, geen connectie is DIE dan stopt het met alles laat het de error zien
$conn = mysqli_connect($hostname, $username, $password, $dbname, $port) or DIE ("".mysqli_connect_error());
?>
