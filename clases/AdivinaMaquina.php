<?php

require_once 'database/DatabaseOOP.php';

if (!isset($_SESSION["sesion_maquina1"])) {
    $_SESSION["sesion_maquina1"] = "";
}

class AdivinaMaquina {

    private $contador;
    private $rango_menor;
    private $rango_mayor;
    private $modalidad;
    private $nivel;

    public function pregunta_maquina1() {
        $dbOOP1 = new DatabaseOOP();
        if (!isset($this->contador)) {
            $this->contador = $_SESSION['contador'] = 0;
            $this->rango_menor = $_SESSION["rango_menor"] = 1;
            $this->rango_mayor = $_SESSION["rango_mayor"] = 10;
        }

        $this->nivel = 1;
        $this->modalidad = "Adivina Maquina";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['post'])) {
                if ($_POST['post'] == "es menor") {
                    $this->contador++;
                    $this->rango_mayor = ($_SESSION['numero_maquina'] - 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es mayor") {
                    $this->contador++;
                    $this->rango_menor = ($_SESSION['numero_maquina'] + 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es correcto") {
                    echo "<h3>¡La máquina ha adivinado el número! El número es: " . $_SESSION['numero_maquina'] . ".</h3>";
                    $dbOOP1->connect();
                    $dbOOP1->insert($this->modalidad, $this->nivel, $this->contador);
                    unset($this->contador);
                    echo "<input type='submit' name='post' value='Jugar de nuevo'>";
                    // HACEMOS OTRO ELSE IF PARA EL BOTÓN POST DE JUGAR DE NUEVO
                } else if ($_POST['post'] == "Jugar de nuevo") {
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                    $this->contador++;
                }
            } else {
                $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                $this->contador++;
            }
        }
    }

    public function pregunta_maquina2() {
        $dbOOP2 = new DatabaseOOP();
        if (!isset($this->contador)) {
            $this->contador = $_SESSION['contador'] = 0;
            $this->rango_menor = $_SESSION["rango_menor"] = 1;
            $this->rango_mayor = $_SESSION["rango_mayor"] = 50;
        }

        $this->nivel = 2;
        $this->modalidad = "Adivina Maquina";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['post'])) {
                if ($_POST['post'] == "es menor") {
                    $this->contador++;
                    $this->rango_mayor = ($_SESSION['numero_maquina'] - 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es mayor") {
                    $this->contador++;
                    $this->rango_menor = ($_SESSION['numero_maquina'] + 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es correcto") {
                    echo "<h3>¡La máquina ha adivinado el número! El número es: " . $_SESSION['numero_maquina'] . ".</h3>";
                    $dbOOP2->connect();
                    $dbOOP2->insert($this->modalidad, $this->nivel, $this->contador);
                    unset($this->contador);
                    echo "<input type='submit' name='post' value='Jugar de nuevo'>";
                    // HACEMOS OTRO ELSE IF PARA EL BOTÓN POST DE JUGAR DE NUEVO
                } else if ($_POST['post'] == "Jugar de nuevo") {
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                    $this->contador++;
                }
            } else {
                $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                $this->contador++;
            }
        }
    }

    public function pregunta_maquina3() {
        $dbOOP3 = new DatabaseOOP();
        if (!isset($this->contador)) {
            $this->contador = $_SESSION['contador'] = 0;
            $this->rango_menor = $_SESSION["rango_menor"] = 1;
            $this->rango_mayor = $_SESSION["rango_mayor"] = 100;
        }

        $this->nivel = 3;
        $this->modalidad = "Adivina Maquina";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['post'])) {
                if ($_POST['post'] == "es menor") {
                    $this->contador++;
                    $this->rango_mayor = ($_SESSION['numero_maquina'] - 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es mayor") {
                    $this->contador++;
                    $this->rango_menor = ($_SESSION['numero_maquina'] + 1);
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                } else if ($_POST['post'] == "es correcto") {
                    echo "<h3>¡La máquina ha adivinado el número! El número es: " . $_SESSION['numero_maquina'] . ".</h3>";
                    $dbOOP3->connect();
                    $dbOOP3->insert($this->modalidad, $this->nivel, $this->contador);
                    unset($this->contador);
                    echo "<input type='submit' name='post' value='Jugar de nuevo'>";
                    // HACEMOS OTRO ELSE IF PARA EL BOTÓN POST DE JUGAR DE NUEVO
                } else if ($_POST['post'] == "Jugar de nuevo") {
                    $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                    echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                    $this->contador++;
                }
            } else {
                $_SESSION['numero_maquina'] = rand($this->rango_menor, $this->rango_mayor);
                echo "<h3>El número a adivinar es " . $_SESSION['numero_maquina'] . "?</h3>";
                $this->contador++;
            }
        }
    }

}

?>
