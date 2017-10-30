<?php

session_start();

if (!$_SESSION["validar"]) {

    header("location:ingreso");

    exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";

?>

<!--=====================================
INICIO
======================================-->


<div id="seccionArticulos" class="col-lg-6 col-md-10 col-sm-9 col-xs-12">
    <ul id="editarArticulo">
        <li>
			<span>
			<button class="btn btn-primary pull-right">Guardar</button>
			</span>


            <input type="text" value="Lorem Ipsum">

            <textarea cols="30" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>


            <hr>

        </li>

    </ul>


</div>
<div id="seccionArticulos" class="col-lg-6 col-md-10 col-sm-9 col-xs-12">

    <div id="editarImagen"><span class="fa fa-times"></span><img src="views/images/articulos/landscape03.jpg"
                                                                 class="img-thumbnail"></div>
</div>

<!--====  Fin de ARTÍCULOS ADMINISTRABLE  ====-->

<!--=====================================

