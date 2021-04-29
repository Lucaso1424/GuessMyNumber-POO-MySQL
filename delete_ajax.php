<?php

$servername = "localhost";
$username = "root";
$password = "79957995lucas";
$dbname = "M07_UF3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_POST['id'];
$sql = "DELETE FROM `ESTADISTIQUES` WHERE ID=$id";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($conn);
?>