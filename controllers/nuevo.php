<?php
class Nuevo extends Controller{

    public function __construct()
    {
        parent::__construct();
        //$this->view->render('nuevo/index');
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('nuevo/index');
    }


    function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $mensaje= "";

       if( $this->model->insert([
            'matricula'=>$matricula,
            'nombre'=>$nombre,
            'apellido'=>$apellido
        ])){
            $mensaje = "nuevo alumno Creado";
        }else{
            $mensaje = "la matrícula ya existe";
        }

        $this->view->mensaje= $mensaje;
        $this->render();
    }
}

?>