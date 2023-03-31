
<?php /*
$id = $_GET ['id'];
    $query_sesion = $pdo->prepare("SELECT * FROM comprador WHERE id = '$id' ");
    $query_sesion->execute();
    $sesion_usuarios = $query_sesion->fetchAll(PDO::FECTH_ASSOC);
    foreach ($sesion_usuarios as $sesion_usuario){
       $id = $sesion_usuario['id'];*/
?>
<h1 class="page-header">Cita</h1>

<div class="well well-sm text-right">
    <!--<a class="btn btn-primary" href="?c=Cita&a=Crud.'$id'.=<?php echo $sesion_usuario['id'];?>">Nueva cita</a>-->
   <a class="btn btn-primary" href="?c=Cita&a=Crud">Nueva cita</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Cliente</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <!-- <th style="width:60px;">Editar</th>-->
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idCliente; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->descripcion; ?></td>

            <td>
            <!-- <a href="?c=Cita&a=Crud&idCita=<?php echo $r->idCita; ?>">Editar</a>-->
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
