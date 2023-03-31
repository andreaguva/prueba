
<?php
session_start();
if (!isset($_SESSION["Usuario"])) {
  header('Location:http://localhost/prueba/');
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Index de admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="../../js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">
        <h1 class="titulo text-muted text-center">Administrador</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <div class="icono" data-bs-toggle="modal" data-bs-target="#modalregistro ">
                    <a type="buttom" href="#registrar" class="btn  ">
                        <i class="bi-person-rolodex me-3">Registrar</i>
                    </a>
                </div> -->
                <hr>
                <form method="post" class="form-inline">
                    <div class="input-group">
                        <input type="text" id="nombreCliente" name="nombreCliente" placeholder="Buscar por nombre" class="form-control">
                        <button type="submit" name="submit" class="btn btn-success">Ver resultados</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="mt-3">Lista de usuarios</h2>
                <!-- <h2 class="mt-3"></h2> -->
                <?php
                include_once 'buscar.php';

                // print_r($buscar);
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Número Documento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // include 'leer.php';

                        if ($usuarios && $statement->rowCount() > 0) {
                            foreach ($usuarios as $fila) {
                        ?>
                                <tr>
                                    <td><?php echo ($fila["id"]); ?></td>
                                    <td><?php echo ($fila["nombreCliente"]); ?></td>
                                    <td><?php echo ($fila["apellidoCliente"]); ?></td>
                                    <td><?php echo ($fila["telefonoCliente"]); ?></td>
                                    <td><?php echo ($fila["NoDocumentoCliente"]); ?></td>
                                    <td><?php echo ($fila["email"]); ?></td>
                                    <td>
                                        <a href="<?= 'borrar.php?id=' .  ($fila["id"]); ?>"> <i class="bi-eraser-fill"></i> Borrar</a>
                                        <a href="<?= '../CRUD/editar.php?=' . ($fila["id"]);?>"> <i class="bi-pencil-fill"></i> Editar</a>
                                    </td>

                                </tr>
                        <?php

                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-sm-7 clearfix">
                    <a href='../admin/index.php' class="btn btn-secondary float-end rounded-0" type="button">
                        <i class="bi bi-box-arrow-right"></i> Regresar
                    </a>
            </div>
  
</body>
</html>