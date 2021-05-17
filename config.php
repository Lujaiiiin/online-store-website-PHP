<?php
$dbhost = "localhost";

$dbuser = "root";

$dbpass = "";
 
$dbname = "sportsstore";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("NO DATABASE CONNECTION"); 

$db=$connection;
?>