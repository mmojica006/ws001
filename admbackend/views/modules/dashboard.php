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

<div id="inicio" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

    <div class="col-lg-3 col-xs-6 ">

        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>Visitas</p>
            </div>
            <div class="icon">
                <i class="ion-ios-speedometer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box caja2">
            <div class="inner">
                <h3>150</h3>

                <p>Contacto</p>
            </div>
            <div class="icon">
                <i class="ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box caja3">
            <div class="inner">
                <h3>150</h3>

                <p>Subscripciones</p>
            </div>
            <div class="icon">
                <i class="ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6 ">
        <!-- small box -->
        <div class="small-box caja4">
            <div class="inner">
                <h3>150</h3>

                <p>Reclutamiento</p>
            </div>
            <div class="icon">
                <i class="ion-ios-pie"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>


<!--====  Fin de INICIO  ====-->