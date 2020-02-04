<?php
class DbManager
{
    private $conn;
    
    public function __construct()
    {
        require_once('db.settings.php');
        $this->conn = new mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }


    public function get_connection()
    {
        return $this->conn;
    }
}
