<?php

class Ingreso
{
    public function ingresoController()
    {
        $datosController = array("usuario" => $_POST["usuarioIngreso"],
            "password" => $_POST["passwordIngreso"]);

        $respuesta = IngresoModels::ingresoModel($datosController);

        if ($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]) {

            header("location:index.php?action=inicio");
        } else {
            echo "error al ingresar";
        }


    }

}