<?php
require_once 'model/usuarioCliente.php';

class UsuarioClienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new UsuarioCliente();
    }
    
    public function Index(){
        require_once 'vistas/header.php';
        require_once 'vistas/usuarioCliente/usuarioCliente.php';

    }
    
    public function Crud(){
        $clie = new UsuarioCliente();
        
        if(isset($_REQUEST['id'])){
            $clie = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'vistas/header.php';
        require_once 'vistas/usuarioCliente/usuarioClienteEditar.php';


    }
    
    public function Guardar(){
        $clie = new UsuarioCliente();
        
        $clie->id = $_REQUEST['id'];
        $clie->nombreCliente = $_REQUEST['nombreCliente'];
        $clie->apellidoCliente = $_REQUEST['apellidoCliente'];
        $clie->telefonoCliente = $_REQUEST['telefonoCliente'];
        $clie->NoDocumentoCliente = $_REQUEST['NoDocumentoCliente'];
        $clie->email = $_REQUEST['email'];
        $clie->password = $_REQUEST['password'];
        $clie->nivel = $_REQUEST['nivel'];



        $clie->id > 0 
            ? $this->model->Actualizar($clie)
            : $this->model->Registrar($clie);
        
        header('Location: usuarioCliente.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: usuarioCliente.php');
    }
}