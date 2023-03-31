

<h1 class="page-header">
    <?php echo $clie->id != null ? $clie->nombreCliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cliente">Clientes</a></li>
  <li class="active"><?php echo $clie->id != null ? $clie->nombreCliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $clie->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombreCliente" value="<?php echo $clie->nombreCliente; ?>" class="form-control" placeholder="Ingrese el nombre " data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellidoCliente" value="<?php echo $clie->apellidoCliente; ?>" class="form-control" placeholder="Ingrese el apellido " data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefonoCliente" value="<?php echo $clie->telefonoCliente; ?>" class="form-control" placeholder="Ingrese el número de teléfono" data-validacion-tipo="requerido" />
    </div> 

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $clie->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Número de documento</label>
        <input type="text" name="NoDocumentoCliente" value="<?php echo $clie->NoDocumentoCliente; ?>" class="form-control" placeholder="Ingrese el número de documento" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $clie->email; ?>" class="form-control" placeholder="Ingrese el email" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $clie->password; ?>" class="form-control" placeholder="Ingrese password" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <input type="hidden" name="nivel" value="5" />
    </div>
   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>