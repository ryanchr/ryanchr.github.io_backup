<?php
header('Content-type: text/html; charset=utf-8');

// HERE add your data for connecting to MySQ database
$host = 'localhost';           // MySQL server address
$user = 'root';                // User name
$pass = 'password';            // User`s password
$dbname = 'database';          // Database name

// connect to the MySQL server
$conn = new mysqli($host, $user, $pass, $dbname);

// check connection
if (mysqli_connect_errno()) exit('Connect failed: '. mysqli_connect_error());

// sql query for CREATE "userson" TABLE
$sql = "CREATE TABLE `userson` (
 `uvon` VARCHAR(32) PRIMARY KEY,
 `dt` INT(10) UNSIGNED NOT NULL
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 

// Performs the $sql query on the server to create the table
if ($conn->query($sql) === TRUE) echo 'Table "userson" successfully created';
else echo 'Error: '. $conn->error;

$conn->close();
?>