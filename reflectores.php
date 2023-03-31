<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>

    <main>
        <?php
            $response = json_decode(file_get_contents('http://localhost/prueba/api/productos/api-productos.php?categoria=reflector'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                // mostrar error
            }
        ?>
        
    </main>

    <script src="js/main.js"></script>
    <div></div>
    <nav image.png class="navbar navbra-expand-sm bg-dark fixed-bottom text-secondary
                justify-content-center">
                    
                    <br><br><br>
                    <i class="bi bi-c-circle me-1"> </i><center><h4 style="color:#FFFF"> Todos los derechos reservados 2018-
                    <?php  echo date("Y"); ?></h4></center>
                    <br><br><br><br>
            </nav>
    </body>

</html>