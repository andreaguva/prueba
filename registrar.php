<!DOCTYPE html>
<html>

<head>
    <title>Registro de usuario</title>
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

                <form action="./controller/registrarUsuario.php" method="POST" class="was-validated p-4 p-md-5 border rounded-3 bg-light">
                    <h2 class="text-center">Registro de usuario</h2>
                    <div class="form-floating m-4">
                        <input type="text" class="form-control" id="nombreCliente" placeholder="Ingrese su Nombre" name="nombreCliente" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="nombre"><i class="bi bi-person-fill"></i> Nombre:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="text" class="form-control" id="apellidoCliente" placeholder="Ingrese su Apellido" name="apellidoCliente" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="apellido"><i class="bi bi-person-fill"></i> Apellido:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="number" class="form-control" id="telefonoCliente" placeholder="Ingrese su Telefono" name="telefonoCliente" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="Telefono"><i class="bi bi-person-fill"></i> Telefono:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="number" class="form-control" id="NoDocumentoCliente" placeholder="Ingrese su Documento" name="NoDocumentoCliente" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <label for="documento"><i class="bi bi-person-fill"></i> N° Documento:</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su Email" name="email" required>
                        <div class="invalid-feedback">Por favor llene este campo</div>
                        <div class="valid-feedback">El correo electronico es adecuado</div>
                        <label for="email"><i class="bi bi-envelope"></i>Email:</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="password" class="form-control" id="password" placeholder="Ingrese su Contraseña" name="password" required>
                        <label for="password"><i class="bi bi-lock"></i>Password:</label>
                    </div>
                    <div class="d-grid m-0 ">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-dark  ms-4 me-4">
                                <i class="bi bi-pc me-3"></i>Registrarse</button>
                             <!-- <a type="buttom" href="iniciar.php" class="btn btn-dark  ms-4 me-4">
                                <i class="bi bi-pc me-3"></i>Iniciar sesión</a>  -->
                        </div>
                    </div>
            </div>
        </div>
        <hr>
        </form>
        <script>
            function alerta(i) {
                if (email.value == "") {
                    alert('Ingrese un correo');
                    return i.preventDefault();
                } else {
                    alert('Su correo ha sido registrado');
                }
            }
        </script>

        <navimage.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
            <hr>
            <i class="bi bi-c-circle me-1"> </i> Todos los derechos reservados.2018-
            <?php echo date("Y"); ?>

            </nav>

</body>

</html>