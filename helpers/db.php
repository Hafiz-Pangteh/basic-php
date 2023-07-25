<?php
$hostname = ""; //host
$username = ""; //database username
$password = "";  //database password
$database = ""; //database name
$port = 3306;
// mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);

if(!$connection) {
     die("disconnected" .mysqli_connect_error());
} else {
}

