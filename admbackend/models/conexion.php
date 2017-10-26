<?php

class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=127.0.0.1;dbname=crediweb","root","");

        return $link;


    }


}