<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class connectionDB {
    public $servername;
    public $username;
    public $password;
    public $database;
    public $port;
    public $conn;

    public function __construct() {
        $this->servername = "sql312.infinityfree.com";
        $this->username = "if0_39118987";
        $this->password = "kj2yjykJYw";
        $this->database = "if0_39118987_examen";
        $this->port       = 3306;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database, $this->port);

        if ($this->conn->connect_error) {
            die("Connection error: " . $this->conn->connect_error);
        }
    }

    public function connection() {
        return $this->conn;
    }
}
?>
