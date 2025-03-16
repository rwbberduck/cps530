<?php
$hostname = "localhost";
$username = "user";
$password = "password";
$database = "database";
// create a connection
$connect = mysqli_connect($hostname, $username, $password, $database);
// check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
