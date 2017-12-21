<?php
   class Dbao{

       public function __construct(){}

       public static function getconnexion(){
           $dns = "mysql:host=localhost;dbname=Gestionuser";
           $username = "root";
           $password = "";

           try{
                $db = new PDO($dns, $username, $password);
           }catch (PDOException $ex){
                die($ex->getMessage());
           }
           return $db;
       }

       public function executeMAJ($sql){
           return $this->getconnexion()->exec($sql);
       }

       public function executeSELECT($sql){
           return $this->getconnexion()->query($sql);
       }
   }
?>