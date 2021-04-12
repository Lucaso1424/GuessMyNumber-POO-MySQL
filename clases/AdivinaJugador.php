<?php
if (!isset($_SESSION["sesion_jugador"])) {
    $_SESSION["sesion_jugador"] = "";
}

class AdivinaJugador {

    private $contador_jugador;
    private $intentos_jugador;
    private $numeroSecreto;
    private $estadisticas;

    public function pregunta_jugador1() {
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }
        
        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 10);
        }

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
                    unset($this->intentos_jugador);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
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
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }
        
        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 50);
        }

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
                    unset($this->intentos_jugador);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
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
        if (!isset($this->contador_jugador)) {
            $this->contador_jugador = $_SESSION['contador'] = 0;
        }

        if (!isset($this->intentos_jugador)) {
            $this->intentos_jugador = $_SESSION["intentos"] = 0;
        }
        
        if (!isset($this->numeroSecreto)) {
            $this->numeroSecreto = $_SESSION["secretNumber"] = rand(1, 100);
        }

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
                    unset($this->intentos_jugador);
                    echo $this->estadisticas;
                    $this->contador_jugador ++;
                    $this->intentos_jugador ++;
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