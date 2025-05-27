<?php
class connectionDB {
    public $servername;
    public $username;
    public $password;
    public $database;
    public $port;
    public $conn;

    public function __construct() {
        $this->servername = "b1fuvnecmmc28bqzjpgn-mysql.services.clever-cloud.com";
        $this->username = "ug6b6t7x9suqwcjk";
        $this->password = "fiuWwgYy7rAlu0PPPMOM";
        $this->database = "b1fuvnecmmc28bqzjpgn";
        $this->port       = getenv('MYSQL_ADDON_PORT') ?: 3306;

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
