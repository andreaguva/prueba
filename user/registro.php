<?php
session_start();
if (!isset($_SESSION["id"])) {
  header('Location:http://localhost/prueba/');
 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuarios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container-fluid bg-primary text-center text-white p-2">
            <h1>  <i class="bi bi-person-rolodex"></i> Registro de Usuarios</h1>
        </div>

        <div class="container mt-1">
        <img src="../img/fondos.jpeg" alt="Imagen de cinta de video"
                class="img-fluid rounded">

            <form action= "#" method="POST" class="was-validated">
                <div class="form-floating m-4">
                    <input type="email" class="form-control" id="nombre"
                    placeholder="Ingrese su Nombre" name="nombre" required>
                    <div class="invalid-feedback">Por favor llene este campo</div>
                    <label for="nombre"><i class="bi bi-person-fill"></i> Nombre:</label>
                </div>

                <div class="form-floating m-4">
                    <input type="email" class="form-control" id="email"
                    placeholder="Ingrese su Email" name="email" required>
                    <div class="invalid-feedback">Por favor llene este campo</div>
                    <div class="valid-feedback">El correo electronico es adecuado</div>
                    <label for="email"><i class="bi bi-envelope"></i> Email:</label>
                </div>

                <div class="form-floating m-4">
                    <input type="password" class="form-control" id="password"
                    placeholder="Ingrese su Contraseña" name="password" required>
                    <label for="password"><i class="bi bi-lock"></i>Password:</label>
                </div>
                <div class="d-grid m-0 ">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success ms-4 me-4">
                            <i class="bi bi-send me-3"></i> Ingresar</btton>
                        <button type="submit" class="btn btn-secondary ms-4 me-4">
                            <i class="bi bi-person-rolodex me-3"></i> Ingresar</btton>
                     </div>
                </div>
                <hr>
            </form>
        </div>
        <navimage.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
                    <hr>
                    <i class="bi bi-c-circle me-1"> </i> Todos los derechos reservados.2018-
                    <?php  echo date("Y"); ?>
             
            </nav>
    </body>
</html>