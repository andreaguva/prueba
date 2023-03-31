<?php

class Conexion{

    private $servidor;
    private $database;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->servidor = 'localhost';
        $this->database = 'paneles';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }

    function conectarDB(){
        try{
            $connection = "mysql:host=" . $this->servidor . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

}

?>