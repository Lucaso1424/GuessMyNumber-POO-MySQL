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
        }  else {
            echo "<h2>Conectado puto</h2>";
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

    public function selectAll() {
        $sql = "SELECT ID, MODALITAT, NIVELL, DATA_PARTIDA, INTENTS FROM ESTADISTIQUES";
        $result = null;
        if ($this->connection != null) {
            $result = mysqli_query($this->connection, $sql);
        }
        return $result;
    }

    public function selectByModalitat($modalitat) {
        $sql = "SELECT ID, MODALITAT, NIVELL, DATA_PARTIDA, INTENTS FROM ESTADISTIQUES WHERE MODALITAT = '$modalitat'";
        $result = null;
        if ($this->connection != null) {
            $result = mysqli_query($this->connection, $sql);
        }
        return $result;
    }

}