<?php
class connectionDB {
    public $servername;
    public $username;
    public $password;
    public $database;
    public $port;
    public $conn;

    public function __construct() {
        $this->servername = "b916e5r2qcqqqjwzo6hh-mysql.services.clever-cloud.com";
        $this->username = "ugm2po53uqsx21gx";
        $this->password = "2stChWzPFU7XeBwAdPIn";
        $this->database = "b916e5r2qcqqqjwzo6hh";
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
