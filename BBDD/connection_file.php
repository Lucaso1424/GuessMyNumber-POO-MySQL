<?php
// CONEXIÓN MYSQL CON PHP A OBJETOS
$servername = "localhost";
$username = "root";
$password = "79957995lucas";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h2>Connected successfully</h2>";

// O TAMBIÉN

/* CONEXIÓN A MySQL CON LA VARIABLE mysqli_connect

$conexion = mysqli_connect('localhost', 'root', '79957995lucas', 'GALERIA');

print_r($conexion);*/
?>

