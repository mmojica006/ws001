<?php
ob_start();
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
                $usuarioActual = $_POST["usuarioIngreso"];
                $maximoIntentos = $this->maxIntentosController();
                if ($intentos < intval($maximoIntentos)) {
                    if ($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]) {
                        $intentos = 0;
                        $datosController = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                        $respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
                        //  session_start();
                        // $_SESSION["validar"] = true;
                        header("location:index.php?action=inicio");                        // exit();
                    } else {
                        ++$intentos;
                        $datosController = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                        $respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
                          echo "<p class='alert alert-danger'>Error al ingresar</p>";
                    }
                } else {
                    $intentos = 0;
                    $datosController = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                    $respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
                      echo "<p class='alert alert-danger'>Ha fallado 3 veces, demuestre que no es un robot</p>";
                }
            }
        }
    }
    public function maxIntentosController()
    {
        $tabla = "tbl_catalogo";
        $respuesta = IngresoModels::getMaxIntentosModel($tabla);
        return $respuesta["valor"];
    }
}
