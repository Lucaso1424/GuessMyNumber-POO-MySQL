<?php
$servername = "localhost";
$username = "root";
$password = "79957995lucas";
$dbname = "M07_UF3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h2>Connected successfully</h2>";
?>