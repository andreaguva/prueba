<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"> </script>
    <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
<body>
    
<?php include '../modules/menu.php' 
// include '../config/usuario.php';

?>



<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light"  action="../config/usuario.php" method="POST" class="was-validated">
        <h1 class="text-center">Registro de usuarios</h1>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="Ingrese su Email" name="email" id="email" required>
            <label for="floatingInput">Email:</label>
          </div>
          
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recordar usuario
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" placeholder="enviar" type="submit"  onclick='alerta(this.value)'>INGRESAR</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>
  <script>
   function alerta(i){
    if(email.value == ""){
      alert('Ingrese un correo');
      return i.preventDefault();
    }
    else{
      alert('Su correo ha sido registrado');
    }
   }

  </script>

<?php include '../modules/footer.php';
?>


</body>
</html>