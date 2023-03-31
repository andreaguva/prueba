<?php
require_once 'model/producto.php';

class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
        
    }
    
    public function Index(){
        require_once 'vistas/header.php';
        require_once 'vistas/producto/producto.php';
        $datos =$this->producto->listar();
        return $datos;
    }
    
    public function Crud(){
        $pro = new Producto();
        
        if(isset($_REQUEST['idProducto'])){
            $pro = $this->model->Obtener($_REQUEST['idProducto']);
        }
        
        require_once 'vistas/header.php';
        require_once 'vistas/producto/productoEditar.php';
    }

   
    public function Guardar(){
           
        //print_r $_FILES['imagenProducto']['name'];
    /*    if(!$_POST){
            $datos = $this->model->listar();
            return $datos;
        }else{
            $permitidos=array("image/jpg", "image/png", "image/jpeg");
            $limite = 700;
            if(in_array($_FILES['imagenProducto']['type'], $permitidos) && $_FILES['imagenProducto']['size']<= $limite * 1024)
            $nombre = date() $_FILES['imagenProducto']['name'];
            move_uploaded_file($_FILES['imagenProducto']['tmp_name'],$ruta);
            $pro->producto->set("nombreProducto", $_POST['nombreProducto']);
            $pro->producto->set("imagenProducto", $nombre);
            $pro->producto->set("descripcionProducto", $_POST['descripcionProducto']);
            $pro->producto->set("precioProducto", $_POST['precioProducto']);
            $pro->producto->set("categoria", $_POST['categoria']);
            $pro->producto->set("idProducto", $_POST['idProducto']);
            $pro->producto->add();
            header("Location: " URL "producto");


        */
       

       

       /* $pro = new Producto();
        
        
        if($_FILES["imagenProducto"]["type"]=="image/png || image/jpg"){
            
       

        if((isset($_FILES['imagenProducto'])) &&($_FILES['imagenProducto'] != '')){
            $files =fopen($_FILES['imagenProducto']['tpm_name'], "rb");

            $fileName = "";
            $fileExtension = "";
        }else{
            $files="";
        }
    }    */
        $pro->idProducto = $_REQUEST['idProducto'];
        $pro->imagenProducto = $files;
        $pro->nombreProducto = $_REQUEST['nombreProducto'];
        $pro->descripcionProducto = $_REQUEST['descripcionProducto'];
        $pro->precioProducto = $_REQUEST['precioProducto'];
        $pro->categoria = $_REQUEST['categoria'];
        $pro->idProducto > 0
            ? $this->model->Actualizar($pro)
            : $this->model->Registrar($pro);
        
        header('Location: producto.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idProducto']);
        header('Location: producto.php');
    }
}