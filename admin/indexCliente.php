
<?php
session_start();
if (!isset($_SESSION["rol"])) {
  header('Location:http://localhost/prueba/');
  $_SESSION['id'] = $id_sesion;
  


}else{
    if($_SESSION['rol'] != 5){
        header('location: loginCliente.php');
    }
}



    ?>
<!DOCTYPE html>
<html>
<head>
	<title> Index de Cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>
</head>
    <body>

   
    

    <nav class="navbar navbar-expand-sm fixed-top p-3" style= "background-color:#ffffff">   
            <div class="container-fluid">
                 <a class="navbar-brand" href="http://localhost/prueba">
                 <img src="./img/prueba.jpg" alt="logo" style="width:45%; min-width:50px;">
                </a>
                 <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#colNav">
                    <span class="navbar-toggler-icon"></span>
                 </button>

                 <div id="colNav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto me-2">

            <!--<li class="nav-item">
            <a   class="nav-link active" aria-current="page" href="http://localhost/prueba" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Inicio</a>
            </li>-->
    
            <li class="nav-item ">
            <a class="nav-link active" href="../comprador.php" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Clientes</a>
            </li>            
              
            <li class="nav-item ">
            <a class="nav-link active" href="../usuario.php" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Usuarios</a>
            </li>     

        </ul>
        <div class="col-sm-4 clearfix">
                    <a href="../controller/cerrarSesion.php" class="btn btn-secondary float-end rounded-0" type="button">
                        <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                    </a>
            </div>
        </div>
    </div> 
            </div>
            </div> 
            </nav>

            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container" id="Factures">
<div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
<h1>Bienvenido Cliente</h1>
               
                <img src="./img/admi.webp" class="rounded mx-auto d-block" alt="...">
</div>

            
        <!-- <div class="container-fluid bg-white text-center text-dark p-2">
            <h1>  <i class="bi bi-person-rolodex"></i>Gestión de Usuario </h1>
        </div>

        <div class="container mt-1">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark m-0">
                <a class="navbar-brand ms-2" href="#">
                    <h2>Bienvenido </h2></a>
                    <button class="navbar-toggler" type="button"
                    data-bs-toogle="collapse" data-bs-target="#menuR">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuR">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="bi bi-house"></i>Inicio</a></li>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="bi bi-film"></i>Cartelera</a></li>    
                            
                            <li class="nav-item">
                                <a href="usuarios/index.php" class="nav-link">
                                <i class="bi bi-briefcase"></i>usuarios</a></li>    
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="bi bi-box-arrow-right"></i>Salir</a></li>        
                        </ul>
                    </div>
            </nav>
        <div class= "row"> 
                <div class="col-sm-8">
                    <h1>Bienvenido</h1>
                </div>
                <div class="col-sm-4 clearfix">
                    <a href="../controller/cerrarSesion.php" class="btn btn-secondary float-end rounded-0" type="button">
                        <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                    </a>
            </div>
           
        </div> -->


        <navimage.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
                    <hr>
                    <i class="bi bi-c-circle me-1"> </i> Todos los derechos reservados.2018-
                    <?php  echo date("Y"); ?>
             
            </nav>
    </body>
</html>