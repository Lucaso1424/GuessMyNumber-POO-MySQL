<?php

class DatabaseProc {

    private $servername = "localhost";
    private $username = "root";
    private $password = "79957995lucas";
    private $dbname = "M07_UF3";

    public function connect(): void {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->connection) {
            die("<h2>Connection failed: " . mysqli_connect_error() . "</h4>");
            $this->connection = null;
        }
    }

    public function insert($modalitat, $nivell, $intents): int {
        $sql = "INSERT INTO ESTADISTIQUES (MODALITAT, NIVELL, INTENTS) VALUES ('$modalitat', $nivell, $intents)";
        if ($this->connection != null) {
            if (mysqli_query($this->connection, $sql)) {
                return mysqli_insert_id($this->connection);
            } else {
                return -1;
            }
        }
    }

    public function imprimirTabla() {
        $dbproc = new DatabaseProc();
        $dbproc->connect();
        $result = $dbproc->selectAll();

        if ($result->num_rows > 0) {
            // output data of each row
            $output = "<table>";
            $output .= "<tr><th>ID</th><th>MODALITAT</th><th>NIVELL</th><th>DATA</th><th>INTENTS</tr>";
            while ($row = $result->fetch_assoc()) {
                $output .= "<tr><td>" . $row["ID"] . "</td><td>" . $row["MODALITAT"] . "</td>"
                        . "<td>" . $row["NIVELL"] . "</td>" . "<td>" . $row["DATA_USUARI"] . "</td>" .
                        "<td>" . $row["INTENTS"] . "</td></tr>";
                // GUARDAMOS EN OUTPUT CERRANDO LA ETIQUETA TODAS LAS ROWS
            } $output .= "</table>";
        } else {
            echo "<p>No hay inserciones en la base de datos.</p>";
            echo "<p>No has jugado partidas! :(</p>";
        }
        // PRINTAMOS LA VARIABLE OUTPUT
        echo "<div class='center'>";
        echo $output;
        echo "</div>";
    }

    public function selectAll() {
        $sql = "SELECT MODALITAT, NIVELL, INTENTS, ID, DATA_USUARI FROM ESTADISTIQUES";
        $result = null;
        if ($this->connection != null) {
            $result = mysqli_query($this->connection, $sql);
        }
        return $result;
    }

    public function selectByModalitat($modalitat) {
        $sql = "SELECT MODALITAT, NIVELL, INTENTS, ID, DATA_USUARI FROM ESTADISTIQUES WHERE MODALITAT = '$modalitat'";
        $result = null;
        if ($this->connection != null) {
            $result = mysqli_query($this->connection, $sql);
        }
        return $result;
    }

}
