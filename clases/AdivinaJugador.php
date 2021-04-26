<?php

if (!isset($_SESSION["sesion_jugador"])) {
    $_SESSION["sesion_jugador"] = "";
}

class AdivinaJugador {

    private $contador_jugador;
    private $intentos_jugador;
    private $numeroSecreto;
    private $estadisticas;
    private $modalidad;
    private $date;

    public function pregunta_jugador1() {
        $dbproc = new DatabaseProc();
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }

        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 10);
        }

        $this->modalidad = "Adivina Jugador";

        $nivel1 = 1;

        $this->estadisticas = "<h3>Número de partidas ganadas: " . $this->contador_jugador . " .<br> Intentos en esta partida: " . $this->intentos_jugador . " .</h3>";

        echo "<h3>Número de intentos: " . $this->intentos_jugador . "</h3>";

        // COMPROBAMOS SI NO ESTÁ EN EL ARRAY, QUE GENER UN NUMERO ALEATORIO
        $secretNumber = $this->numeroSecreto;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = htmlspecialchars($_REQUEST['fname']);
            if (empty($numero)) {
                echo "<h3>No has escrito nada.</h3>";
            } else {
                if ($numero == $secretNumber) {
                    echo "<h3>Has adivinado el numero, el numero era: " . $secretNumber . "</h3>";
                    // DESACEMOS LA SESIÓN SOLO DEL SECRET NUMBER PARA QUE SE GENERE UN NUEVO ALEATORIO 
                    unset($this->numeroSecreto);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
                    $dbproc->connect();
                    $dbproc->insert($this->modalidad, $nivel1, $this->intentos_jugador);
                    unset($this->intentos_jugador);
                    echo "<input type='submit' value='Jugar de nuevo'>";
                } else if ($numero > $secretNumber) {
                    echo "<h3>El número ha de ser más pequeño que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                } else {
                    echo "<h3>El número ha de ser más grande que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                }
            }
        }
    }

    public function pregunta_jugador2() {
        $dbproc2 = new DatabaseProc();
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }

        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 50);
        }

        $this->modalidad = "Adivina Jugador";

        $nivel2 = 2;

        $this->estadisticas = "<h3>Número de partidas ganadas: " . $this->contador_jugador . " .<br> Intentos en esta partida: " . $this->intentos_jugador . " .</h3>";

        echo "<h3>Número de intentos: " . $this->intentos_jugador . "</h3>";

        // COMPROBAMOS SI NO ESTÁ EN EL ARRAY, QUE GENER UN NUMERO ALEATORIO
        $secretNumber = $this->numeroSecreto;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = htmlspecialchars($_REQUEST['fname']);
            if (empty($numero)) {
                echo "<h3>No has escrito nada.</h3>";
            } else {
                if ($numero == $secretNumber) {
                    echo "<h3>Has adivinado el numero, el numero era: " . $secretNumber . "</h3>";
                    // DESACEMOS LA SESIÓN SOLO DEL SECRET NUMBER PARA QUE SE GENERE UN NUEVO ALEATORIO 
                    unset($this->numeroSecreto);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
                    $dbproc2->connect();
                    $dbproc2->insert($this->modalidad, $nivel2, $this->intentos_jugador);
                    unset($this->intentos_jugador);
                    echo "<input type='submit' value='Jugar de nuevo'>";
                } else if ($numero > $secretNumber) {
                    echo "<h3>El número ha de ser más pequeño que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                } else {
                    echo "<h3>El número ha de ser más grande que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                }
            }
        }
    }

    public function pregunta_jugador3() {
        $dbproc3 = new DatabaseProc();
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }

        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 100);
        }

        $this->modalidad = "Adivina Jugador";

        $nivel3 = 3;

        $this->estadisticas = "<h3>Número de partidas ganadas: " . $this->contador_jugador . " .<br> Intentos en esta partida: " . $this->intentos_jugador . " .</h3>";

        echo "<h3>Número de intentos: " . $this->intentos_jugador . "</h3>";

        // COMPROBAMOS SI NO ESTÁ EN EL ARRAY, QUE GENER UN NUMERO ALEATORIO
        $secretNumber = $this->numeroSecreto;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = htmlspecialchars($_REQUEST['fname']);
            if (empty($numero)) {
                echo "<h3>No has escrito nada.</h3>";
            } else {
                if ($numero == $secretNumber) {
                    echo "<h3>Has adivinado el numero, el numero era: " . $secretNumber . "</h3>";
                    // DESACEMOS LA SESIÓN SOLO DEL SECRET NUMBER PARA QUE SE GENERE UN NUEVO ALEATORIO 
                    unset($this->numeroSecreto);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
                    $dbproc3->connect();
                    $dbproc3->insert($this->modalidad, $nivel3, $this->intentos_jugador);
                    unset($this->intentos_jugador);
                    echo "<input type='submit' value='Jugar de nuevo'>";
                } else if ($numero > $secretNumber) {
                    echo "<h3>El número ha de ser más pequeño que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                } else {
                    echo "<h3>El número ha de ser más grande que $numero" . "</h3>";
                    $this->intentos_jugador ++;
                }
            }
        }
    }

}

?>