<?php
session_start();
include_once 'clases/database/DatabaseProc.php';
include_once 'clases/AdivinaJugador.php';
//error_reporting(0);
?>

<html>

    <head>
        <title>Pràctica Guess my number PHP - Lucas Padilla</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    </head>

    <body>
        <h1>Guess my number</h1>
        <h2>Nivell 2</h2>
        <form method="post" action="index.php">
            <button type="submit" class="button button2">Vuelve al menú del juego</button>
        </form>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Envia el número a adivinar:<p> <input type="text" name="fname">
                <button type="submit" class="button button2">Enviar</button>
                <br>

                <?php
                $sesion = $_SESSION["sesion"];
                if ($sesion == "") {
                    $sesion = new AdivinaJugador();
                } else {
                    $sesion = unserialize($sesion);
                }
                $sesion->pregunta_jugador2();
                $_SESSION["sesion"] = serialize($sesion);
                ?>
        </form>
        <div class="footer">
            <p id="p_footer">Lucas Padilla Hidalgo™</p>
            <p id="p_footer">Todos los derechos reservados. 2021.</p>
        </div>
    </body>

</html>