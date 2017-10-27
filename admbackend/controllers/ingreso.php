<?php


class Ingreso
{
    public function ingresoController()
    {
        if (isset($_POST["usuarioIngreso"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"])
            ) {

                #$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


                $datosController = array("usuario" => $_POST["usuarioIngreso"],
                    "password" => $_POST["passwordIngreso"]);

                $respuesta = IngresoModels::ingresoModel($datosController, "usuarios");

                $intentos = $respuesta["intentos"];
                $maximoIntentos = 2;


                if ($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]) {
                    header("location:index.php?action=inicio");

                } else {
                    echo "<p class='alert alert-danger'>Error al ingresar</p>";

                }
            }
        }
    }
}