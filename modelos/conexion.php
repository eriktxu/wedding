<?php 

class Conexion {

    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3309;dbname=web-4b", "soporte", "122123");
        //database conexion
        $link->exec("set names utf8");
        
        return $link;
    }
}
