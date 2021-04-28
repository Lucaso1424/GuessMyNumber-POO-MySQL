<?php
session_start();
include_once 'clases/AdivinaMaquina.php';
?>

<html>

<head>
    <title>Pràctica Guess my number PHP - Lucas Padilla</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
</head>

<body>
    <h1>Guess my number</h1>
    <h2>Nivell 3</h2>

    <form method="post" action="index.php">
        <button type="submit" class="button button2">Vuelve al menú del juego</button>
    </form>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="post" value="es mayor" class="button button2">El número es más grande</button>
        <button type="submit" name="post" value="es menor" class="button button2">El número es más pequeño</button>
        <button type="submit" name="post" value="es correcto" class="button button2">El número es correcto</button>

        <br>
        <br>

        <?php
            $sesion = $_SESSION["sesion_maquina3"];
            if ($sesion == "") {
                $sesion = new AdivinaMaquina();
            } else {
                $sesion = unserialize($sesion);
            }
            $sesion->pregunta_maquina3();
            $_SESSION["sesion_maquina3"] = serialize($sesion);
            ?>
    </form>
    <div class="footer">
        <p id="p_footer">Lucas Padilla Hidalgo™</p>
        <p id="p_footer">Todos los derechos reservados. 2021.</p>
    </div>
</body>

</html>