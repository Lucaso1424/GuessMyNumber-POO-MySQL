<?php
include_once 'clases/database/DatabaseProc.php';

$dbproc = new DatabaseProc();

$q = intval($_GET['q']);
if (($q == "1")) {
    $dbproc->connect();
    $result = $dbproc->selectByModalitat("Adivina Jugador");
    $dbproc->imprimirTabla($result);
} else if (($q == "2")) {
    $dbproc->connect();
    $result = $dbproc->selectByModalitat("Adivina Maquina");
    $dbproc->imprimirTabla($result);
} else if (($q == "3")) {
    $dbproc->connect();
    $result = $dbproc->selectAll();
    $dbproc->imprimirTabla($result);
}
?>