<?php

include 'conexion.php';
session_start();

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: ../admin/index.php');
        break;

        case 2:
            header('location: ../admin/indexGerente.php');
        break;
        
        case 3:
            header('location: ../admin/indexJefe.php');
        break;

        case 4:
            header('location: ../admin/indexVendedor.php');
        break;
    
        case 5:
            header('location: ../indexCarrito.php');
        break;        

        default:
    }
}
if (isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conexionc = new Conexion();
    $con = $conexionc->conectarDB()->prepare('SELECT *FROM comprador WHERE email = :email AND password = :password');
    $con->execute(['email' => $email, 'password' => $password]);
  //  $row = $con->query($con);
    $row = $con->fetch(PDO::FETCH_NUM);
    
    if($row == true){
        $rol = $row[8];
        
        $_SESSION['rol'] = $rol;
        switch($rol){
                case 1:
                    header('location: ../admin/index.php');
                break;
    
                case 2:
                    header('location: ../admin/indexGerente.php');
                break;
                
                case 3:
                    header('location: ../admin/indexJefe.php');
                break;
    
                case 4:
                    header('location: ../admin/indexVendedor.php');
                break;
    
                case 5:
                    header('location: ../indexCarrito.php');
                    break;

                default:
            }
        }else{
            // no existe el comprador
            echo "Nombre de comprador o contraseña incorrecto";
        }
    

   
        } else {
            $_SESSION["Error"] = "Por favor verifique sus credenciales de acceso";
           // header('Location: http://localhost/prueba/');
        }
     //   $con->close();
    
//$init = new Login();
//$init->inicio();
