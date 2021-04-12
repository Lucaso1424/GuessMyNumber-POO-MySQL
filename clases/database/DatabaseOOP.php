<?php
/**
 * Implementació de la clase DatabaseConnection segons el model OOP,
 * Object Oriented Programming.
 *
 * @author Pep
 */
class DatabaseOOP {
    private $servername = "localhost";
    private $username = "root";
    private $password = "79957995lucas";
    private $dbname = "M07_UF3";

    public function connect(): void {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->connection) {
            die("<h2>Connection failed: " . mysqli_connect_error() . "</h2>");
            $this->connection = null;
        } else if ($this->connection) {
            echo "<h2>Connection on database succesfully</h2>";
        }
    }

    public function insert($modalitat, $nivell, $intents): int {
        $sql = "INSERT INTO ESTADISTIQUES (MODALITAT, NIVELL, INTENTS) VALUES ('$modalitat', $nivell, $intents)";
        if ($this->connection != null) {
            if ($this->connection->query($sql) === TRUE) {
                return $this->connection->insert_id;
            } else {
                return -1;
            }
        }
    }

    public function selectAll() {
        $sql = "SELECT ID, MODALITAT, NIVELL, DATA_PARTIDA, INTENTS FROM ESTADISTIQUES";
        $result = null;
        if ($this->connection != null) {
            $result = $this->connection->query($sql, MYSQLI_USE_RESULT);
        }
        return $result;
    }

    public function selectByModalitat($modalitat) {
        $sql = "SELECT ID, MODALITAT, NIVELL, DATA_PARTIDA, INTENTS FROM ESTADISTIQUES WHERE MODALITAT = '$modalitat'";
        $result = null;
        if ($this->connection != null) {
            $result = $this->connection->query($sql, MYSQLI_USE_RESULT);
        }
        return $result;
    }
}
