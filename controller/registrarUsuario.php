<?php
session_start();
class Configuracion
{

  function crearUsuario()
  {
    try {
      include 'conexion2.php';
      $conexion = conexion('paneles', 'root', '');


      if (!$conexion) {
        echo "Error al conectar ";
        die();
      }
      $compradors = array(
        "nombreCliente"   => $_POST['nombreCliente'],
        "apellidoCliente" => $_POST['apellidoCliente'],
        "telefonoCliente" => $_POST['telefonoCliente'],
        "NoDocumentoCliente" => $_POST['NoDocumentoCliente'],
        "email"    => $_POST['email'],
        "password" => $_POST['password']
      );
      // print_r($usuario);
      echo "<br>";


      $consultaSQL = "INSERT INTO compradors (
                nombreCliente,
                apellidoCliente, 
                telefonoCliente, 
                NoDocumentoCliente,
                email,                            
                password)
            VALUES(:" . implode(", :", array_keys($compradors)) . ");"; //Usando la función implode() para convertir un array en una cadena en PHP,
      //array_keys Devuelve un array con todas las claves de un array o un subconjunto de claves de un array.

      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($compradors);
      // $usuario = $consultaSQL->fetchAll();


      // print_r(implode(array_keys($usuario)));
      header('Location:http://localhost/prueba/');


      echo "Exito";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}

$con = new Configuracion();
// Linea para crear la base de datos para el proyecto
// $conexion->crearDB();
// Crear usuario en sabe de datos
$con->crearUsuario();
