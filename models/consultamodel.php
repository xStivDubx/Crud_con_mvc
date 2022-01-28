<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM alumno");
            $query->execute();
            while($row = $query->fetch()){

                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];

                array_push($items,$item);

            }

            return $items;
        }catch(PDOException $e){
            return [];
        }
       
    }


    public function getById($id){
        $item = new Alumno();

        try{
            $query = $this->db->connect()->prepare("SELECT * FROM alumno where matricula=:matricula");
            $query -> bindParam(':matricula',$id,PDO::PARAM_STR);
            $query->execute();

            while($row = $query->fetch()){
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];

            }
            
            return $item;
        }catch (PDOException $e){
            return null;
        }
    }

    public function update($item){
        try{
            $query = $this->db->connect()->prepare("UPDATE alumno SET nombre=:nombre,apellido=:apellido WHERE matricula=:matricula");

            $query -> bindParam(':nombre',$item['nombre'],PDO::PARAM_STR);
            $query -> bindParam(':apellido',$item['apellido'],PDO::PARAM_STR);
            $query -> bindParam(':matricula',$item['matricula'],PDO::PARAM_STR);
            $query->execute();
            
            return true;
        }catch (PDOException $e){
            return false;
        }
    }


    public function delete($id){
        try{
            $query = $this->db->connect()->prepare("DELETE FROM alumno  WHERE matricula=:matricula");
            $query -> bindParam(':matricula',$id,PDO::PARAM_STR);
            $query->execute();
            
            return true;
        }catch (PDOException $e){
            return false;
        }
    }

}

?>