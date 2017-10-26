<!DOCTYPE html>
<html lang="en">

<head>
    <title>CREDIEXPRESS | Tu crédito fácil y rápido</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='views/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Carga de Galeria de imágenes -->
    <link rel="stylesheet" href="views/css/owl.carousel.min.css">

    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="views/css/bootstrap.css">
    <link rel="stylesheet" href="views/css/animate.min.css">
    <link rel="stylesheet" href="views/css/estilos.css">
</head>

<body>

<?php include "modules/cabezote.php";?>

<?php include "modules/publicidad.php"; ?>

<?php include "modules/servicios.php"; ?>



<?php include "modules/testimonios.php"; ?>

<!-- TESTIMONIO MODAL-->
<?php include "modules/testimonioModal.php"; ?>







<!--
    <main class="servicios py-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold">Nuestros Servicios</h2>


            <div class="row">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="images/servicio-1.svg" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                    <h3><a href="#"> Desarrollo de Aplicaciones Mobiles </a></h3>
                    <p class="hidden-sm-down">Desarrollamos aplicaciones móviles y plataformas web. Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="images/servicio-2.svg" alt="Servicio Consultoría Tecnológica">
                    <h3><a href="#">Consultoría Tecnológica</a></h3>
                    <p class="hidden-sm-down">Ofrecemos consultoría tecnológica especializada en movilidad, necesaria previo al desarrollo de cualquier proyecto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="images/servicio-3.svg" alt="Servicio Marketing y publicidad Movil">
                    <h3><a href="#">Marketing y publicidad Movil</a></h3>
                    <p class="hidden-sm-down">Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en el momento exacto para conseguir un mayor inpacto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

            </div>
        </div>
    </main>
-->




    <footer class="piedepagina py-1" role="contentinfo">
        <div class="container">
            <p>2017 © CREDIEXPRESS Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

    <script src="views/js/jquery.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoWidth: false,
            navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2,
                    margin: 20
                },
                800: {
                    items: 3,
                    margin: 20
                },
                1000: {
                    items: 4,
                    margin: 20
                }
            }
        })

    </script>
    <script src="views/js/wow.min.js"></script>
    <script src="views/js/smooth-scroll.min.js"></script>
    <script src="views/js/sitio.js"></script>



</body>

</html>
