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


    $conexion = new Conexion();
    $con = $conexion->conectarDB()->prepare('SELECT *FROM usuario WHERE email = :email AND password = :password');
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


   
    
        } else{
            $conexion = new Conexion();
            $con = $conexion->conectarDB()->prepare('SELECT *FROM comprador WHERE email = :email AND password = :password');
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
                    // no existe el usuario
                    echo "Nombre de usuario o contraseña incorrecto";
                }
        }
    }
       /* $con->close();
    
$init = new Login();
$init->inicio();*/
