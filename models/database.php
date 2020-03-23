<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'tienda';


$conn = mysqli_connect($server, $user, $pass, $db);


class Database{
    private $server = 'localhost';
    private $db = 'tienda';
    private $user = 'root';
    private $pass = '';
    private $conn;
    
    
    function conectarse(){
        $this->conn = mysqli_connect($this->server, $this->user,
        $this->pass, $this->db);
        if(mysqli_connect_error() ){
            echo "Error" . mysqli_connect();
        }
        return $this->conn;
    }
    }
    


?>