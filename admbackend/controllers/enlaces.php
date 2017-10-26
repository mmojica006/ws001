<?php


class Enlaces{
    public function enlacesController(){

        if (isset($_GET["action"])){
            $enlaces = $_GET["action"];

        }else{
            $enlaces = "index.php";
        }

        $respuesta = EnlacesModels::enlacesModel($enlaces);


        include $respuesta;

    }

}