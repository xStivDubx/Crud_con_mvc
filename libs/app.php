<?php
//INICIALIZA LA APLICACION

require_once 'controllers/error.php';

class App{

    public function __construct()
    {
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url'])?$_GET['url']:null;

        //separando el texto por /
        $url = rtrim($url,'/');

        $url = explode('/',$url);//devolvera un array

        //var_dump($url);

        //cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/'. $url[0] . '.php';
        
        if(file_exists($archivoController)){
            require_once $archivoController;

            //inicializa el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //numero de elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param= [];

                    for($i=2;$i<$nparam;$i++){
                        array_push($param,$url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }

            //si hay un metodo que se requiere al cargar
            /*if(isset($url[1])){
                //accediendo al metodo de forma dinamica
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }*/

        }else{
            $controller = new Errores();
        }
        

    }
}
?>