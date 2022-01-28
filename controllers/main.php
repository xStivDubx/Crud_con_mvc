<?php

class Main extends Controller{

    public function __construct()
    {
        parent::__construct();

        
       // echo "<p>Nuevo Controlador Main</p>";
    }

    function render(){
        $this->view->render('main/index');
    }


    function saludo(){
        echo "<p>Ejecutando el metodo saludo</p>";
    }
}


?>