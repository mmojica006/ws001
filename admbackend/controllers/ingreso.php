<?php

class Ingreso
{
    public function ingresoController()
    {
        if (isset($_POST["usuarioIngreso"])) {


            $datosController = array("usuario" => $_POST["usuarioIngreso"],
                "password" => $_POST["passwordIngreso"]);


            $respuesta = IngresoModels::ingresoModel($datosController);


            if ($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]) {

               // header("location:index.php?action=inicio");
            } else {
                echo "<p class='alert alert-danger'>error al ingresar</p>";



            }


        }

    }


}