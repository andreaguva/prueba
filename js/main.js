//Configurara las opciones para cargar la pagina
document.addEventListener('DOMContentLoaded', event =>{
    // cookies para actualizar los elementos del carrito
    const cookies = document.cookie.split(';');
    let cookie = null;
    cookies.forEach(item =>{
        if(item.indexOf('items') > -1){
            cookie = item;
        }
    });

    if(cookie != null){
        const count = cookie.split('=')[1];
        console.log(count);
        document.querySelector('.btn-carrito').innerHTML = `(${count}) Carrito`;
    }
});

const bCarrito = document.querySelector('.btn-carrito');

bCarrito.addEventListener('click', event =>{

    const carritoContainer = document.querySelector('#carrito-container');

    if(carritoContainer.style.display == ''){
        carritoContainer.style.display = 'block';
        actualizarCarritoUI();
    }else{
        carritoContainer.style.display = '';
    }
});

function actualizarCarritoUI(){
    fetch('http://localhost/prueba/api/carrito/api-carrito.php?action=mostrar')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        let tablaCont = document.querySelector('#tabla');
        let precioTotal = '';
        let html = '';
        let shops = '';

// Mostrar productos seleccionados para ingresar al carrito
        data.items.forEach(element =>{
            html += `
                <div class='fila'>


                    <div class='info'>
                        <input type='hidden' value='${element.idProducto}' />
                        <div class='nombreProducto'>${element.nombreProducto}</div>
                        <div>Cantidad: ${element.cantidad} </div> 
                        <div>Precio: $${element.precioProducto}</div>
                        <div>Subtotal: $${element.subtotal}.000</div>
                        <div class='botones'><button class='btn-remove'>Quitar 1 producto del carrito</button></div>
                        
                    </div>
                </div>

            `;
        });

        shops = `<br><br><div class='botones'><button2 class='btn-actulaizar'><a href="https://prueba.mercadoshops.com.co/"> Ir MercadoShops</a</button></div><br>`;

        // Valores reflejados en el carrito
        precioTotal = `<p>Total: $${data.info.total}.000</p>`;
        tablaCont.innerHTML = precioTotal + html + shops;

        document.cookie = `items=${data.info.count}`;
        
        bCarrito.innerHTML = `(${data.info.count}) Carrito`;

        document.querySelectorAll('.btn-remove').forEach(boton =>{
            boton.addEventListener('click', e =>{
                const idProducto = boton.parentElement.parentElement.children[0].value;

                removeItemFromCarrito(idProducto);

                
            });
        });
    });
}

const botones = document.querySelectorAll('.btn-add');

botones.forEach(boton =>{
    const idProducto = boton.parentElement.parentElement.children[0].value;

    boton.addEventListener('click', e =>{
        addItemToCarrito(idProducto);
    });
});

function removeItemFromCarrito(idProducto){
    fetch('http://localhost/prueba/api/carrito/api-carrito.php?action=remove&idProducto=' + idProducto)
    .then(res => res.json())
    .then(data =>{
        console.log(data.statuscode);
        actualizarCarritoUI();
    });
}

function addItemToCarrito(idProducto){
    fetch('http://localhost/prueba/api/carrito/api-carrito.php?action=add&idProducto=' + idProducto)
    .then(res => res.json())
    .then(data =>{
        console.log(data.statuscode);
        actualizarCarritoUI();
    });
}
