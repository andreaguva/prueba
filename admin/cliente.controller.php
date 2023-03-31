<?php
require_once 'model/email.php';

class ClienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }
    
    public function Index(){
        require_once 'vistas/header.php';
        require_once 'vistas/email/email.php';
    }
    
    public function Crud(){
        $clie = new Cliente();
        
        if(isset($_REQUEST['id'])){
            $clie = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'vistas/header.php';
        require_once 'vistas/email/emailEditar.php';
    }
    
    public function Guardar(){
        $clie = new Cliente();
        
        $clie->id = $_REQUEST['id'];
        $clie->nombreCliente = $_REQUEST['nombreCliente'];
        $clie->apellidoCliente = $_REQUEST['apellidoCliente'];
        $clie->telefonoCliente = $_REQUEST['telefonoCliente'];
        $clie->NoDocumentoCliente = $_REQUEST['NoDocumentoCliente'];
        $clie->email = $_REQUEST['email'];
        $clie->password = $_REQUEST['password'];



        $clie->id > 0 
            ? $this->model->Actualizar($clie)
            : $this->model->Registrar($clie);
        
        header('Location: email.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: email.php');
    }
}