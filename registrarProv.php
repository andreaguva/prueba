<!DOCTYPE html>
<html>

<head>
    <title>Registrar Proveedor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include 'modules/menu.php'
    // include '../config/usuario.php';

    ?>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">

            <div class="col-md-10 mx-auto col-lg-5">

                <form action="./controller/registrarProveedor.php" method="POST" class="was-validated p-4 p-md-5 border rounded-3 bg-light">
                    <h2 class="text-center">Registrar Proveedor</h2>
                    <div class="form-floating m-4">
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre" name="nombre" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="nombre"><i class="bi bi-person-fill"></i> Nombre completo:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese su Apellido" name="direccion" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="apellido"><i class="bi bi-person-fill"></i> Dirección:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="number" class="form-control" id="telefono" placeholder="Ingrese su Telefono" name="telefono" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="Telefono"><i class="bi bi-person-fill"></i> Telefono:</label>
                    </div>
                    <div class="d-grid m-0 ">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-dark  ms-4 me-4">
                                <i class="bi bi-pc me-3"></i>Registrar</button>
                             <!-- <a type="buttom" href="iniciar.php" class="btn btn-dark  ms-4 me-4">
                                <i class="bi bi-pc me-3"></i>Iniciar sesión</a>  -->
                        </div>
                    </div>
            </div>
        </div>
        <hr>
        </form>

<nav class="navbar navbar-expand-sm fixed-top p-3" style= "background-color:#ffffff">   
            <div class="container-fluid">
                 <a class="navbar-brand" href="http://localhost/prueba">
                 <img src="admin/img/prueba.jpg" alt="logo" style="width:45%; min-width:50px;">
                </a>
                 <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#colNav">
                    <span class="navbar-toggler-icon"></span>
                 </button>

                 <div id="colNav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto me-2">

            <li class="nav-item">
            <a   class="nav-link active" aria-current="page" href="http://localhost/prueba" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Inicio</a>
            </li>
            
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../registrarProv.php">Registrar Proveedor</a></li>
            <li><a class="dropdown-item" href="">Buscar Proveedor</a></li>
          </ul>
        </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="usuarios/index.php" style="color: #090911;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-house"></i>Usuarios</a>
          </li>
        </ul>
            <hr>
            <i class="bi bi-c-circle me-1"> </i> 
            <?php echo date("Y"); ?>

            </nav>

</body>

</html>