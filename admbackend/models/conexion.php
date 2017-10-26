<?php

class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost:82;dbname=crediweb","root","");

        return $link;


    }


}