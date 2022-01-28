<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = HOST;
        $this->db= DB;
        $this->user = USER;
        $this->charset = CHARSET;
        $this->password = PASSWORD;


    }

    function connect(){
        try{
            $link = "mysql:host=" . $this->host .";dbname=".$this->db.";charset=". $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $pdo = new PDO($link,$this->user,$this->password,$options);
            return $pdo;
        }catch(PDOException $e){
            print_r("error: ". $e->getMessage());
            die();
        }
    }
}
?>