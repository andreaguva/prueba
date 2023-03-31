<?php
require_once 'model/usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'vistas/header.php';
        require_once 'vistas/usuario/usuario.php';
    }
    
    public function Crud(){
        $usu = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $usu = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'vistas/header.php';
        require_once 'vistas/usuario/usuarioEditar.php';
    }
    
    public function Guardar(){
        $usu = new Usuario();
        
        $usu->id = $_REQUEST['id'];
        $usu->nombre = $_REQUEST['nombre'];
        $usu->apellido = $_REQUEST['apellido'];
        $usu->NoDocumento = $_REQUEST['NoDocumento'];
        $usu->direccion = $_REQUEST['direccion'];
        $usu->telefono = $_REQUEST['telefono'];
        $usu->email = $_REQUEST['email'];
        $usu->password = $_REQUEST['password'];
        $usu->nivel = $_REQUEST['nivel'];


        $usu->id > 0 
            ? $this->model->Actualizar($usu)
            : $this->model->Registrar($usu);
        
        header('Location: usuario.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: usuario.php');
    }
}