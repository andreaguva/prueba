<div class="articulo">
    <input type="hidden" id="idProducto" value="<?php echo $item['idProducto'];  ?>">
    <div class="imagenProducto"><img src="img/<?php echo $item['imagenProducto'];  ?>" /></div>
    <div class="nombreProducto"><?php echo $item['nombreProducto'];  ?></div>
    <div class="precioProducto">$<?php echo $item['precioProducto'];  ?> MXN</div>
    <div class="botones">
        <button>Agregar al carrito</button>
    </div>
</div>