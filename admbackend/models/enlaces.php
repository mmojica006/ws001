<?php

class EnlacesModels{

    public function enlacesModel($enlaces){
    if ($enlaces == "dashboard" ||
        $enlaces == "inicio" ||
        $enlaces == "acerca" ||
        $enlaces == "anuncios" ||
        $enlaces == "testimonios" ||
        $enlaces == "crediturbo" ||
        $enlaces == "credifrio" ||
        $enlaces == "contacto"
    ){
        $module = "views/modules/".$enlaces.".php";

    }else if ($enlaces == "index"){

        $module = "views/modules/ingreso.php";
    }else{

        $module = "views/modules/ingreso.php";
    }

    return $module;




    }

}