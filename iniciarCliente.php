<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cuenta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="./js/bootstrap.bundle.min.js"></script>
</head>

    <body>
        <?php
       include 'modules/menu.php';
        ?>
        
<br>
<br>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      
      <div class="col-md-10 mx-auto col-lg-5">

            <form action= "./controller/loginCliente.php" method="POST" class="was-validated p-4 p-md-5 border rounded-3 bg-light">
            <h2 class="text-center">Mi cuenta</h2> 
              
                <div class="form-floating m-15">
                    <input type="email" class="form-control" id="email"
                    placeholder="Ingrese su Email" name="email" required>
                    <div class="invalid-feedback">Por favor llene este campo</div>
                    <div class="valid-feedback">El correo electronico es adecuado</div>
                    <label for="email"><i class="bi bi-envelope"></i>Email:</label>
                </div>

                <div class="form-floating m-15">
                    <input type="password" class="form-control" id="password"
                    placeholder="Ingrese su Contraseña" name="password" required>
                    <label for="password"><i class="bi bi-lock"></i>Password:</label>
                </div>
                <br>
                <div class="d-grid m-0 ">
                    <div class="btn-group">
                        <button type="submit" class="btn">
                            <i class="bi-send me-3">Ingresar</i>
                          </button>
                          <div class="icono" data-bs-toggle="modal" data-bs-target="#modalregistro">
                          <a  type="buttom" href="http://localhost/prueba/comprador.php?c=Cliente&a=Crud" class="btn" >
                            <i class="bi-person-rolodex me-3">Registrar</i>
                          </a> 
                          </div>
                </div>
                </div>
            </form>
            </div>

 <!-- <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light"  >
        <h2 class="text-center">Bienvenidos</h2> 
        <div class="d-grid m-0 ">
                    <div class="btn-group">
                    <button type="button" class="btn btn-secondary ">
                         <a type="submit" href="http://localhost/sitioweb/administrador/index.php">
                            <i class="bi bi-send me-3"></i> Ingresar</button></a> 
                            
                            <a type="submit" class="btn btn-secondary ms-4 me-4" href="http://localhost/prueba/usuarioCliente.php?c=Cliente&a=Crud">
                            <i class="bi bi-person me-3"></i> Registrarse</a>
                       
                    </div> -->

          
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div> 
        <navimage.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
                    <hr>
                    <i class="bi bi-c-circle me-1"> </i> Todos los derechos reservados.2018-
                    <?php  echo date("Y"); ?>
             
            </nav>
    </body>
</html>