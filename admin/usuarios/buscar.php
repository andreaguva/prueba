<?php
try {
    include '../../controller/conexion2.php';
    $conexion = conexion('paneles', 'root', '');

    if (!$conexion) {
        die();
    }
    if (isset($_POST['nombreCliente'])) {
        $consultaSQL = "SELECT * FROM compradors  WHERE nombreCliente LIKE  '%" . $_POST['nombreCliente'] . "%'";
    } else {
        $consultaSQL = ("SELECT * FROM compradors");

    }
    $statement = $conexion->prepare($consultaSQL);
    $statement->execute();
    $usuarios = $statement->fetchAll();
    // print_r($usuarios); 
} catch (PDOException $error) {
    $error = $error->getMessage();
}
// print_r($usuarios);

$buscar = isset($_POST['nombreCliente']) ? 'Lista de usuarios (' . $_POST['nombreCliente'] . ')' : 'Lista de usuarios';