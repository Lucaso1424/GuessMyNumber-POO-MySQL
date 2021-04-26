<?php
session_start();
// INCLUIR SIEMPRE LOS ARCHIVOS DE DATABASE
include_once 'clases/database/DatabaseProc.php';
?>

<html>

    <head>
        <title>Pràctica Guess my number PHP - Lucas Padilla</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    </head>

    <body>
        <h1>Guess my number</h1>

        <?php
        $dbproc = new DatabaseProc();
        $dbproc->connect();
        ?>

        <form method="get" action="tabla_estadisticas.php">
            <button type="submit">Tabla estadísticas</button>
        </form>


        <p><strong>Modalidad pregunta el jugador</strong></p>
        <p>Escoge el nivel a jugar:</p>
        <a href="nivell1.php">
            <h3>Nivell 1</h3>
        </a>
        <a href="nivell2.php">
            <h3>Nivell 2</h3>
        </a>
        <a href="nivell3.php">
            <h3>Nivell 3</h3>
        </a>

        <p><strong>Modalidad preguntar a la màquina</strong></p>
        <p>Escoge el nivel a jugar:</p>
        <a href="nivell1_maquina.php">
            <h3>Nivell 1</h3>
        </a>
        <a href="nivell2_maquina.php">
            <h3>Nivell 2</h3>
        </a>
        <a href="nivell3_maquina.php">
            <h3>Nivell 3</h3>
        </a>
        <img src="images/logo.png" id="logo">
        <div class="footer">
            <p id="p_footer">Lucas Padilla Hidalgo™</p>
            <p id="p_footer">Todos los derechos reservados. 2021.</p>
        </div>
    </body>

</html>