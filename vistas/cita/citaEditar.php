<?php
//require_once "controller/conexion.php";
//require_once "controller/usuario.controller.php";
//include ("controller/conexion.php");
/*include 'controller/conexion.php';

session_start();
if(isset($_SESSION['id'])){

    $id_sesion = $_SESSION['id'];
    $query_sesion = $pdo->prepare("SELECT * FROM comprador WHERE id = '$id_sesion' ");
    $query_sesion->execute();
    $sesion_usuarios = $query_sesion->fetchAll(PDO::FECTH_ASSOC);
    foreach ($sesion_usuarios as $sesion_usuario){
       echo $id_sesion = $sesion_usuario['id'];

    }
    ?>
      <div>
        <label>Clientes</label>
        <input type="text" name="idCliente" value="<?php echo$id_sesion;?>"/>
    </div>  
<?php
}
session_start();

$id_sesion = $_SESSION['id'];*/

?>
<h1 class="page-header">
    <?php echo $cit->idCita != null ? $cit->fecha : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cita">Fecha</a></li>
  <li class="active"><?php echo $cit->idCita != null ? $cit->fecha : 'Nuevo Registro'; ?></li>
</ol>

<form idCita="frm-cita" action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idCita" value="<?php echo $cit->idCita; ?>" />
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="idCliente" value="<?php echo $cit->idCliente;?>"/>
    </div>
    
   
    <div class="form-group">
        <label>Fecha</label>
        <input type="datetime-local" name="fecha" value="<?php echo $cit->fecha; ?>" value="" />
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $cit->descripcion; ?>" value="" />
    </div>
     
   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cita").submit(function(){
            return $(this).validate();
        });
    })
</script>
