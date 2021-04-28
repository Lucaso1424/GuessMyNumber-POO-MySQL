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

    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 3 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "llamada_ajax.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>

    <form method="get" class="custom-select">
        <select name="Modalidad" onchange="showUser(this.value)">
            <option value="">Selecciona una modalidad:</option>
            <option name="1" value="1">Modalidad Jugador</option>
            <option name="2" value="2">Modalidad Máquina</option>
            <option name="3" value="3">Todas</option>
        </select>
    </form>

<?php
        $dbproc = new DatabaseProc();
        
        $q = intval($_GET['q']);
        if (($q == "1")) {
           $dbproc->imprimirTabla("Adivina Jugador");
        } else if (($q == "2")) {
           $dbproc->imprimirTabla("Adivina Maquina");
        }
        ?>
    
    <div class='center' id='txtHint'>
    </div>
    <br>
    
    <div class="footer">
        <p id="p_footer">Lucas Padilla Hidalgo™</p>
        <p id="p_footer">Todos los derechos reservados. 2021.</p>
    </div>
</body>

</html>