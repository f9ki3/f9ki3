<?php 
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f9ki3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>