<?php
    function connect(){
        $host="localhost";
        $user="root";
        $pass="";
        $dtb="photos";
    
    try{
        $result= new PDO("mysql:host=$host;dbname=$dtb;charset=utf8",$user,$pass);
        $result->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){

        throw new \Exception("ERROR: " . $e->getMessage());
    }
    return $result;
    }

?>