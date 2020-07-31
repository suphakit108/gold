<?php 
$servername = "localhost";
$username = "root";
$password = "root123456";
$dbname = "gold";
// $servername = "fdb26.awardspace.net";
// $username = "3087097_db";
// $password = "0807272521wara";
// $dbname = "3087097_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");


?>