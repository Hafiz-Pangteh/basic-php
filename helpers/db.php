<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "Farn_24498";
$database = "php_colorfull09af";
$port = 3306;
// mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);

if(!$connection) {
     die("disconnected" .mysqli_connect_error());
} else {
}

