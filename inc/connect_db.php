<?php
$servername = "localhost";
$username = "name";
$password = "pass";
$dbname = "dbname";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$table = "wall";
$id = "id";
$field1 = "title";
$field2 = "comment";
$field3 = "signature";