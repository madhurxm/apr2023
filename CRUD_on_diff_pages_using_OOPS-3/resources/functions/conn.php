<?php 
class conn
{
    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $database = "employee";
    public function db_conn()
    {
        $conn = mysqli_connect($this->server, $this->username, $this->pass, $this->database);
        return $conn;
    }
}
