
<h1 class="page-header">Clientes</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=UsuarioCliente&a=Crud">Nuevo comprador</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Número de documento</th>
            <th>Correo</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombreCliente; ?></td>
            <td><?php echo $r->apellidoCliente; ?></td>
            <td><?php echo $r->telefonoCliente; ?></td>
            <td><?php echo $r->NoDocumentoCliente; ?></td>
            <td><?php echo $r->email; ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
