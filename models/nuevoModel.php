<?php

class NuevoModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos){
        //insertar datos en la db

        try{
            $query = $this->db->connect()->prepare("INSERT INTO alumno (matricula,nombre,apellido) values (:matricula,:nombre,:apellido)");
            $query -> bindParam(':matricula',$datos['matricula'],PDO::PARAM_STR);
            $query -> bindParam(':nombre',$datos['nombre'],PDO::PARAM_STR);
            $query -> bindParam(':apellido',$datos['apellido'],PDO::PARAM_STR);
     
             $query->execute();
             //echo "datos insertados";
             return true;
        }catch(PDOException $e){
           //echo "ocurrioo un error: <br>".$e->getMessage();
            return false;
        }
       
    }
}

?>