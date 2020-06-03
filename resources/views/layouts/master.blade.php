<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Direccion de informatica</title>
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- STYLE SHEETS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/templates.css" rel="stylesheet">
    <link href="css/roboto-fontface.css" rel="stylesheet">
    <link href="css/poncho.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icono-arg.css" rel="stylesheet">




    <link rel="stylesheet" href="http://argob.github.io/poncho/node_modules/argob-poncho/dist/icono-arg.css">

    <link href="css/style.css" rel="stylesheet">

    <!--Bootstrap4-->
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
   {{-- <nav>
        <div class="container navbar navbar-expand-lg">
            <div>
                <a class="navbar-brand" href="#"><img src="img/logo-1.svg"/> </a>
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-end mt-2" id="navbarSupportedContent">
                <!--Buscador-->
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-5 col-md-offset-2">
                    <div class="form-group">
                        <div class="input-group small-search input-sm">
                            <input placeholder="Buscar tramites, servicios o areas" class="form-control input-sm" type="text">
                            <span class="input-group-btn" style="border-radius:0px; height: 38px">
                                <button class="btn btn-default btn-md ml-0 h-100" style="background-color: #175388" type="button"><span style="font-size: 1rem; color: #FFFFFF"> <i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-link  col-sm-2 mb-3 mt-3 offset-sm-4" style="height: 3.5em">
                <!--<ul class="navbar-nav mr-auto">
                  <li class="nav-item contorno">-->
                <a href="#" class="panel contorno text-decoration-none text-uppercase d-flex justify-content-center align-items-center h-100" style="font-family: Roboto; height: 2.4em">Mi Argentina <span class="sr-only">(current)</span></a>
                <!-- </li>
               </ul>-->
            </div>
        </div>
    </nav>--}}

    <nav>
        <div class="container navbar navbar-expand-lg">
            <div class="logo">
                <a class="navbar-brand" href="#"><img src="img/logo-1.svg"/> </a>
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-end mt-2" id="navbarSupportedContent">
                <!--Buscador-->
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-5 col-md-offset-2 col-md-12 col-lg-8">
                    <div class="form-group">
                        <div class="input-group small-search input-sm">
                            <input placeholder="Buscar tramites, servicios o areas" class="form-control input-sm" type="text">
                            <span class="input-group-btn" style="border-radius:0px; height: 38px">
                    <button class="btn btn-default btn-md ml-0 h-100" style="background-color: #175388" type="button"><span style="font-size: 1rem; color: #FFFFFF"> <i class="fa fa-search"></i></span></button>
              </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-link  col-sm-12 col-md-12 col-lg-2 mb-3 argentina" style="height: 2.4em">
                <!--<ul class="navbar-nav mr-auto">
                  <li class="nav-item contorno">-->
                <a href="#" class="panel contorno text-decoration-none text-uppercase d-flex justify-content-center align-items-center" style="font-family: Roboto; height: 2.4em">Mi Argentina <span class="sr-only">(current)</span></a>
                <!-- </li>
               </ul>-->
            </div>
        </div>
    </nav>
</header>

@yield('content')


<!--position:fixed; bottom:-10px; width:100%; padding-top:40px;-->

<footer class="main-footer" style="">
    <div class="container aligner">
        <div class="float-left">
            <div class="col-sm-6 col-md-12">
                <img class="image-responsive" src="img/logo_argentina_unida.svg" alt="Ministerio de Producción">
            </div>
            <div class="col-sm-6 col-md-12">
                <p class="text-muted small">Los contenidos de Argentina.gob.ar están licenciados <span class="corte"> bajo <a href="https://creativecommons.org/licenses/by/2.5/ar/">Creative Commons <br> Atribucion 4.0 Internacional</a></span></p>
            </div>
        </div>

        <div class="col-sm-3 float-right">
            <p><a href="">Leyes</a></p>
            <p><a href="">Aceerca de este sitio</a></p>
            <p><a href="">Términos y condiciones</a></p>
        </div>

        <div class="col-sm-3 float-right">
            <p><a href="https://www.argentina.gob.ar/turnos" target="_blank">Turnos</a></p>
            <p><a href="https://www.argentina.gob.ar/organismos" target="_blank">Organismos del estado</a></p>
            <p><a href="">Mapa del estado</a></p>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.jscroll.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $('.scroll').jscroll({
        autoTrigger: false,
        loadingHtml: '<img class="loader" src="../img/loader.gif"><img>'
    });
</script>

<!--//Bootstrap4-->
{{--
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
--}}



<!-- Make sure you put this AFTER Leaflet's CSS -->

</body>
</html>

<script>
    $(document).ready(function(){
        $(".pregunta1").click(function(){
            if($(".pregunta1").hasClass('puesto')) {
                $(".respuesta1").hide();
                $(".pregunta1").removeClass('puesto');

            } else if($(".pregunta2").hasClass('puesto') || $(".pregunta3").hasClass('puesto') || $(".pregunta4").hasClass('puesto')){
                $(".respuesta1").show();
                $(".pregunta1").addClass('puesto');

                $(".respuesta2").hide();
                $(".pregunta2").removeClass('puesto');

                $(".respuesta3").hide();
                $(".pregunta3").removeClass('puesto');

                $(".respuesta4").hide();
                $(".pregunta4").removeClass('puesto');
            }
            else{
                $(".respuesta1").show();
                $(".pregunta1").addClass('puesto');

            }
        });

        $(".pregunta2").click(function(){
            if($(".pregunta2").hasClass('puesto')) {
                $(".respuesta2").hide();
                $(".pregunta2").removeClass('puesto');
            } else if($(".pregunta1").hasClass('puesto') || $(".pregunta3").hasClass('puesto') || $(".pregunta4").hasClass('puesto')){
                $(".respuesta2").show();
                $(".pregunta2").addClass('puesto');

                $(".respuesta1").hide();
                $(".pregunta1").removeClass('puesto');

                $(".respuesta3").hide();
                $(".pregunta3").removeClass('puesto');

                $(".respuesta4").hide();
                $(".pregunta4").removeClass('puesto');
            }
            else {
                $(".respuesta2").show();
                $(".pregunta2").addClass('puesto');
            }
        });

        $(".pregunta3").click(function(){
            if($(".pregunta3").hasClass('puesto')) {
                $(".respuesta3").hide();
                $(".pregunta3").removeClass('puesto');

            } else if($(".pregunta1").hasClass('puesto') || $(".pregunta2").hasClass('puesto') || $(".pregunta4").hasClass('puesto')){
                $(".respuesta3").show();
                $(".pregunta3").addClass('puesto');

                $(".respuesta1").hide();
                $(".pregunta1").removeClass('puesto');

                $(".respuesta2").hide();
                $(".pregunta2").removeClass('puesto');

                $(".respuesta4").hide();
                $(".pregunta4").removeClass('puesto');
            }
            else {
                $(".respuesta3").show();
                $(".pregunta3").addClass('puesto');
            }
        });


        $(".pregunta4").click(function(){
            if($(".pregunta4").hasClass('puesto')) {
                $(".respuesta4").hide();
                $(".pregunta4").removeClass('puesto');
            } else if($(".pregunta1").hasClass('puesto') || $(".pregunta2").hasClass('puesto') || $(".pregunta3").hasClass('puesto')){
                $(".respuesta4").show();
                $(".pregunta4").addClass('puesto');

                $(".respuesta1").hide();
                $(".pregunta1").removeClass('puesto');

                $(".respuesta2").hide();
                $(".pregunta3").removeClass('puesto');

                $(".respuesta3").hide();
                $(".pregunta3").removeClass('puesto');
            }
            else {
                $(".respuesta4").show();
                $(".pregunta4").addClass('puesto');
            }
        });

        /* $(".pregunta1").click(function(){
           if($("pregunta1").hasClass('sombra-slider')) {
             $(".pregunta1").removeClass('sombra-slider');
           }
           else {
             $(".pregunta1").addClass('sombra-slider');
           }
         });*/


    });


    $(".tocame1").click(function(){
        if($(".operacion2").hasClass('fa fa-minus')) {
            $(".operacion1").removeClass('fa fa-plus');
            $(".operacion1").addClass('fa fa-minus');

            $(".mostrar1").show();


            $(".operacion2").removeClass('fa fa-minus');
            $(".operacion2").addClass('fa fa-plus');

            $(".mostrar2").hide();
        }

        else if($(".operacion3").hasClass('fa fa-minus')){
            $(".operacion3").removeClass('fa fa-minus');
            $(".operacion3").addClass('fa fa-plus');

            $(".mostrar3").hide();

            $(".operacion1").removeClass('fa fa-plus');
            $(".operacion1").addClass('fa fa-minus');

            $(".mostrar1").show();
        }
        else if($(".operacion1").hasClass('fa fa-minus')){
            $(".operacion1").removeClass('fa fa-minus');
            $(".operacion1").addClass('fa fa-plus');

            $(".mostrar1").hide();
        }
        else{
            $(".operacion1").removeClass('fa fa-plus');
            $(".operacion1").addClass('fa fa-minus');

            $(".mostrar1").show();

        }

    });

    $(".tocame2").click(function(){
        if($(".operacion1").hasClass('fa fa-minus')) {
            $(".operacion2").removeClass('fa fa-plus');
            $(".operacion2").addClass('fa fa-minus');

            $(".mostrar2").show();

            $(".operacion1").removeClass('fa fa-minus');
            $(".operacion1").addClass('fa fa-plus');

            $(".mostrar1").hide();
        }

        else if($(".operacion3").hasClass('fa fa-minus')){
            $(".operacion3").removeClass('fa fa-minus');
            $(".operacion3").addClass('fa fa-plus');

            $(".mostrar3").hide();

            $(".operacion2").removeClass('fa fa-plus');
            $(".operacion2").addClass('fa fa-minus');

            $(".mostrar2").show();
        }
        else if($(".operacion2").hasClass('fa fa-minus')){
            $(".operacion2").removeClass('fa fa-minus');
            $(".operacion2").addClass('fa fa-plus');

            $(".mostrar2").hide();
        }
        else{
            $(".operacion2").removeClass('fa fa-plus');
            $(".operacion2").addClass('fa fa-minus');

            $(".mostrar2").show();

        }
    });

    $(".tocame3").click(function(){
        if($(".operacion1").hasClass('fa fa-minus')) {
            $(".operacion3").removeClass('fa fa-plus');
            $(".operacion3").addClass('fa fa-minus');

            $(".mostrar3").show();

            $(".operacion1").removeClass('fa fa-minus');
            $(".operacion1").addClass('fa fa-plus');

            $(".mostrar1").hide();
        }

        else if($(".operacion2").hasClass('fa fa-minus')){
            $(".operacion2").removeClass('fa fa-minus');
            $(".operacion2").addClass('fa fa-plus');

            $(".mostrar2").hide();

            $(".operacion3").removeClass('fa fa-plus');
            $(".operacion3").addClass('fa fa-minus');

            $(".mostrar3").show();
        }
        else if($(".operacion3").hasClass('fa fa-minus')){
            $(".operacion3").removeClass('fa fa-minus');
            $(".operacion3").addClass('fa fa-plus');

            $(".mostrar3").hide();
        }
        else{
            $(".operacion3").removeClass('fa fa-plus');
            $(".operacion3").addClass('fa fa-minus');

            $(".mostrar3").show();
        }
    });









    $('.morelink').click(function() {
        if($(this).hasClass('less')) {
            $(this).removeClass('less');
            $(this).html(moretext);
            $('.abstract').removeClass('hidden');
        } else {
            $(this).addClass('less');
            $(this).html(lesstext);
            $('.abstract').addClass('hidden');
        }
        $(this).parent().prev().slideToggle('fast');
        $(this).prev().slideToggle('fast');
        return false;
    });

    /*Evitar que modal se cierre al clickear afuera*/
    /*$('#modalLarg').modal({backdrop: 'static', keyboard: false})*/

</script>
