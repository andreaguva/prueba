<?php
require_once 'model/cita.php';
require_once 'model/comprador.php';
class CitaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cita();
    }
    
    public function Index(){
        require_once 'vistas/header.php';
        require_once 'vistas/cita/cita.php';
    }
    
    public function Crud(){
        $cit = new Cita();
        
        if(isset($_REQUEST['idCita'])){
            $cit = $this->model->Obtener($_REQUEST['idCita']);
        }
        
        require_once 'vistas/header.php';
        require_once 'vistas/cita/citaEditar.php';
    }

   
    
    public function Guardar(){
        $cit = new Cita();
        
        $cit->idCita = $_REQUEST['idCita'];  
        $cit->idCliente = $_REQUEST['idCliente'];
        $cit->fecha = $_REQUEST['fecha'];
        $cit->descripcion = $_REQUEST['descripcion'];


 



        $cit->idCita > 0 
            ? $this->model->Actualizar($cit)
            : $this->model->Registrar($cit);
        
        header('Location: cita.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idCita']);
        header('Location: cita.php');
    }
}