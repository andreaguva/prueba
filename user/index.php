<?php
session_start();
if (!isset($_SESSION["id"])) {
  header('Location:http://localhost/prueba/');
 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>
</head>

    <body>
        <?php
       include '../modules/menu.php'
        ?>
        
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div class="card mb-3" style="max-width: 840px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./img/11.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">

      <div class="btn-group ">
                    <button type="button" class="btn btn-secondary ">
                            <a type="submit" class="btn btn-secondary ms-4 me-4" href="../controller/cerrarSesion.php">
                            <i class="bi bi-person me-3"></i> Cerrar sesión</a>
                       
                    </div>
    </div>
  </div>
</div>
</div>
<!-- <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
  

 <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light"  >
        <h2 class="text-center">Bienvenidos</h2> 
        <div class="d-grid  ">
                    <div class="btn-group ">
                    <button type="button" class="btn btn-secondary ">
                            <a type="submit" class="btn btn-success ms-4 me-4 " href="../controller/cerrarSesion.php">
                            <i class="bi bi-person me-3"></i> Cerrar sesión</a>
                       
                    </div>

          
          <hr class="my-4">
        </form>
      </div>
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