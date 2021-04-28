<?php
session_start();
include_once 'clases/database/DatabaseProc.php';
error_reporting(0);
?>

<html>

<head>
    <title>Pràctica Guess my number PHP - Lucas Padilla</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
</head>

<body>
    <h1>Guess my number</h1>
    <h2>Tabla estadísticas</h2>
    <h2>Puntuación</h2>
    <form method="get" action="index.php">
        <div id="center_button">
            <button type="submit" class="button button2">Inicio</button>
        </div>
    </form>
    <?php
        $dbproc = new DatabaseProc();
        $dbproc->imprimirTabla();
        ?>
    <br>
    <div class="footer">
        <p id="p_footer">Lucas Padilla Hidalgo™</p>
        <p id="p_footer">Todos los derechos reservados. 2021.</p>
    </div>
</body>

</html>