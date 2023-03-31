
<?php
session_start();
if (!isset($_SESSION["rol"])) {
  header('Location:http://localhost/prueba/');

  


}else{
    if($_SESSION['rol'] != 1){
        header('location: login.php');
    }
}


    ?>
<!DOCTYPE html>
<html>
<head>
	<title> Index de admin</title>
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
            <li class="nav-item ">
            <a class="nav-link active" href="../usuarioCliente.php" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Clientes</a>
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
<h1>Bienvenido Administrador</h1>
               
                <img src="./img/admi.webp" class="rounded mx-auto d-block" alt="...">
</div>



        <navimage.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
                    <hr>
                    <i class="bi bi-c-circle me-1"> </i> Todos los derechos reservados.2018-
                    <?php  echo date("Y"); ?>
             
            </nav>
    </body>
</html>