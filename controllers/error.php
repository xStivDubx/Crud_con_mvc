<?php

class Errores extends Controller{

    public function __construct()
    {
        parent::__construct();

        //INSERTANDO EL CODIGO 
        $this->view->mensaje = "Hubo un error de solicitud";
        $this->view->render('error/index');
       // echo "<p>Error al cargar el recurso</p>";
    }
}

?>