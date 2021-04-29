<?php
    $servername = "localhost";
$username = "root";
$password = "79957995lucas";
$dbname = "M07_UF3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$modalidad=$_POST['modalidad'];
$nivell = $_POST['nivell'];
$intents = $_POST['intents'];

$sql = "INSERT INTO `ESTADISTIQUES`( `MODALITAT`, `NIVELL`, `INTENTS`) 
	VALUES ('$modalidad','$nivell','$intents')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}

mysqli_close($conn);
?>