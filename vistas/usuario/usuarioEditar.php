<?php include 'vistas/men.php';?>

<h1 class="page-header">
    <?php echo $usu->id != null ? $usu->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Usuario">Usuarios</a></li>
  <li class="active"><?php echo $usu->id != null ? $usu->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $usu->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $usu->nombre; ?>" class="form-control" placeholder="Ingrese el nombre" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $usu->apellido; ?>" class="form-control" placeholder="Ingrese el apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Número de documento</label>
        <input type="text" name="NoDocumento" value="<?php echo $usu->NoDocumento; ?>" class="form-control" placeholder="Ingrese el número de documento" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $usu->direccion; ?>" class="form-control" placeholder="Ingrese el direccion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $usu->telefono; ?>" class="form-control" placeholder="Ingrese el número telefono" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="email" value="<?php echo $usu->email; ?>" class="form-control" placeholder="Ingrese el email" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $usu->password; ?>" class="form-control" placeholder="Ingrese el password" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Nivel</label>
        <select type="text" name="nivel" value="<?php echo $usu->nivel; ?>" class="form-control" placeholder="Ingrese el nivel" data-validacion-tipo="requerido" />
        <option value="">Seleccione el nivel</option>
        <option value="2">Gerente de compras</option>
        <option value="3">Jefe de inventario</option>
        <option value="4">Vendedor</option>
      </select>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>