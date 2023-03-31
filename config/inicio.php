<?php
session_start();
class Configuracion{
    private $servidor;
    private $user;
    private $password;
    private $status= 0;
function conexion(){
    $servidor = "localhost";
    $user ="root";
    $password ="";
    $con = new mysqli($servidor,$user, $password);
    /*if($con->conectarDB()_error){
        $_SESSION["ErrorDB"]="No ha sido posible conexion con el sistema";
        header('Location: config.php');
    }else{
        $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
        header('Location: config.php');
    }*/
    return $con;
}  
function conectarDB(){
    $servidor = "localhost";
    $user ="root";
    $password ="";
    $database="paneles";
    $con = new mysqli($servidor,$user,$password,$database);
   if($con->conectarDB()_error){
        $_SESSION["ErrorDB"]="No ha sido posible establecer conexion con la base de datos";
        header('Location: config.php');
    }else{
        $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
        header('Location: config.php');
    }
    return $con;

}


function crearDB(){
    $con=$this->conexion();
    $sql = "CREATE DATABASE paneles;";
    
    if($con->query($sql) === TRUE){
        $status = 1;
    }else{
        $_SESSION["ErrorDB"]="Error creando la base de datos";
        header('Location: config.php');
    }
    $con->close();
}

function crearTablas(){
    $con=$this->conectarDB();
    $sql = "CREATE TABLE USUARIO (
        id INT (6) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email varchar(50) NOT NULL,
        password VARCHAR(25) NOT NULL,
        fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
        UPDATE CURRENT_TIMESTAMP );";
    if($con->query($sql) === TRUE){
        $status= 1;
    }else{
        $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
        header('Location: config.php');
       
    }
    $con->close();
}
function crearUsuario(){
    $con= $this->conectarDB();
    include 'seguridad.php';
    $limpieza = new Seguridad();
    $password = $limpieza->encriptarP($_POST["password"]);
    $sql = "INSERT INTO USUARIO (nombre, email, password)
    VALUES('".$_POST["nombre"]."','".$_POST["email"]."','".$password."');";

    if($con->query($sql)=== TRUE){
        $_SESSION["Status"]="Se ha creado el usuario exitosamente";
        header('Location: config.php');
    }else{
        $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos"
        .$con->error;
        header('Location: config.php');
    }
    $con->close();
}
}
$conexion = new Configuracion();
//Linea para crear la base de datos del proyecto:
//$conexion->crearDB();
//Crear usuario en base de datos
$conexion->crearUsuario();
?>