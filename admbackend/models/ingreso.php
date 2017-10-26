<?php
require_once "conexion.php";

class IngresoModels{

    public function ingresoModel($datosModel){

        $stmt = Conexion::conectar()->prepare("SELECT usuario, password from usuarios WHERE usuario=:usuario and password=:password");

        $stmt ->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
        $stmt ->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();



        $stmt->close();





    }

}