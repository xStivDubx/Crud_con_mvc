<?php

class View{
    public function __construct()
    {
        //echo "<p>Vista base</p>";
        
    }


    //lo estoy colocando
    function render($nombre){
        require 'views/'.$nombre.'.php';
    }

}

?>