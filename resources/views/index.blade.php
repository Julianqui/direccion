@extends('layouts.master')
@section('content')
  <main role="main">
    <section class="jumbotron derivador mb-5 pb-5" style="background-image: url('img/download.jpg');">
      <div class="container-fluid">
        <div class="row">

      <!--Navabar-->
          <section class="navbar navbar-expand-lg fondo-nav w-100">
            <div class="container collapse navbar-collapse" id="navbarNav">
              <ul class="breadcrumb mb-0 pb-0 mt-0 pt-0" style="background-color: black; opacity: 0.7">
                <li class="nav-item active">
                  <a class="nav-link pr-1 pl-1" style="color: white; font-family: Roboto" href="" >Inicio<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link ml-0 pl-0 mr-0 pr-0" style="color: white; font-family: Roboto" href="#">/<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pl-1 pr-1" style="color: white; font-family: Roboto" href="#">Ministerio de Desarrollo Productivo </a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link ml-0 pl-0 mr-0 pr-0" style="color: white; font-family: Roboto" href="#">/<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pl-1" style="color: white" href="#">Dirección de informática</a>
                </li>
              </ul>
            </div>
          </section>

        <!--Banner-->
        <div class="container d-flex justify-content-center">
          <div class="col-md-6">
            <h2 style="text-transform: lowercase">Direccion de informatica</h2>
            <h3>Información sobre las medidas y ahorros en tiempo y dinero destinados al sector productivo.</h3>

          </div>

        </div>
      </div>
      </div>
    </section>

      @include('include.message')

    <section class="p-b-0">
      <div class="container">
      <h2>Productos y soluciones digitales</h2>

      </div>
    </section>








    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row panels-row">
              <div class="col-md-4">
                <!-- <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modalLarge">FullScreen</button>
-->
                <a class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLarge" href="">
                  <div class="panel-heading" style="background-image:url(img/automotriz0-1.jpg);min-height:188px;"></div>
                  <header class="panel-body">
                    <h4 style="font-weight: 500;">Precios maximos</h4>
                    <p style="font-size: 16px;">Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
                  </header>
                </a>
              </div>
              <div class="col-md-4">
                <a class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLargeFis" href="">
                  <div class="panel-heading" style="background-image:url(img/automotriz0-1.jpg);min-height:188px;"></div>
                  <header class="panel-body">
                    <h4 style="font-weight: 500;">Precios Claros</h4>
                    <p style="font-size: 16px;">Módulos Web de Administración y Aplicación móvil, que permite la planificación ejecución y control de fiscalizaciones, medir su eficacia y evitar fraudes.</p>
                  </header>
                </a>
              </div>
              <div class="col-md-4">
                <a class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLargeMo" href="">
                  <div class="panel-heading" style="background-image:url(img/automotriz0-1.jpg);min-height:188px;"></div>
                  <header class="panel-body">
                    <h4 style="font-weight: 500;">Turnino</h4>
                    <p style="font-size: 16px;">Portal de trámites que permite a cada ciudadano o empresa realizar los trámites requeridos por el Estado de manera online.</p>
                  </header>
                </a>
              </div>
              <div class="col-md-4">
                <a class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLargeGe" href="">
                  <div class="panel-heading" style="background-image:url(img/automotriz0-1.jpg);min-height:188px;"></div>
                  <header class="panel-body">
                    <h4 style="font-weight: 500;">Comprador</h4>
                    <p style="font-size: 16px;">Un dashboard que refleja métricas (en tiempo y cantidad) de los trámites que ejecuta un organismo, descomponiendo a éste último a nivel de personal.</p>
                  </header>
                </a>
              </div>
              <div class="col-md-4">
                <a class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLargeMuni" href="">
                  <div class="panel-heading" style="background-image:url(img/automotriz0-1.jpg);min-height:188px;"></div>
                  <header class="panel-body">
                    <h4 style="font-weight: 500;">Apk mobile</h4>
                    <p style="font-size: 16px;">Portal de trámites combinado con un gestor documental electrónico que posibilita al municipio configurar trámites digitales mientras que las empresas y/o ciudadanía los ejecuta vía online</p>
                  </header>
                </a>
              </div>



              <div class="col-md-4" style="display: none">
                <!--<a href="#" class="panel panel-default">-->
                <a type="button" class="panel panel-default panel-icon" data-toggle="modal" data-target="#modalLargeGood" href="" id="modalmensajeok">

                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade common-modal" id="modalLarge" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel"  style="z-index: 1050;">

      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="container mt-4">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="font-size: 1.2em;">&times;</span></button>
            <p class="modal-title ml-2" id="modalLargeLabel"><strong> JIMENEZ </strong> | Orquestador lateral de expedientes</p>
          </div>
          <div class="container">
            <hr>
          </div>
          <div class=" modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-3">
                <img src="img/logo-1.svg" class="img-responsive w-100">
              </div>
              <div class="col-sm-12 col-md-9 mt-1">
                <h4 class="text-uppercase">Ministerio de desarrollo productivo</h4>
              </div>
            </div>
            <br>
            <div>
              <h6 class="t-14" style="">DESCRIPCIÓN</h6>

              <p class="t-14">Ahora los trámites se aprueban en segundos y sus resultados los informamos sin necesidad de que el ciudadano o empresa se mueva de casa/oficina.</p>
              <p class="t-14">
                Jimenez es un bot, se interrelaciona con otros organismos, evitando que distintas reparticiones del estado
                soliciten múltiples e idénticos requerimientos de información, reduciendo drásticamente los tiempos de trámites.
                Con Jimenez, <strong>el Estado trabaja 24 horas</strong>, sí, sábado y domingo incluidos.
              </p>
              <br>

              <div class="row">
                <div class="d-md-flex">
                  <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                    <img src="img/modernizacion.jpg" class="img-thumbnail border-0" width="80">
                    <p class="t-14"><strong>Automatización</strong></p>
                    <p class="" style="font-size: 12px">Evalúa y ejecuta acciones administrativas e informativas. </p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                    <img src="img/modernizacion.jpg" class="img-thumbnail border-0" width="80">
                    <p class="t-14"><strong>Trazabilidad</strong></p>
                    <p class="" style="font-size: 12px">Asegura procesos repetibles y resguardo de información</p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                    <img src="img/modernizacion.jpg" class="img-thumbnail border-0" width="80">
                    <p class="t-14"><strong>Interoperabilidad</strong></p>
                    <p  style="font-size: 12px">Reutiliza información que posee el Estado evitando duplicar requerimientos</p>
                  </div>
                </div>

              </div>




              <div class="t-14 mt-5">
                <h5 class="t-14 text-uppercase">Función principal</h5>
                <p class="mb-0 pb-0"><strong>Automatizar operaciones</strong></p>
                <p>Validar información contenida en expedientes comprobando cálculos y veracidad</p>
              </div>

              <div class="t-14 mt-4">
                <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
                <div class="container">
                  <p class="pb-0 mb-1">- Caratular un expediente electrónico y ejecutar acciones de bloqueo, pases, vinculación, generar documentos y archivo.</p>
                  <p class="pb-0 mb-1">- Leer y extraer información adjunta al expediente: Excels, Word, documentos de texto, imagen y los almacena en bases de datos.</p>
                  <p class="pb-0 mb-1">- Crear documentos (ej. gedos) con información tabulada.</p>
                  <p>- Invocar webservices y notificar a un ciudadano el estado del expediente</p>
                </div>
              </div>
              <br>
              <div class="container" style="border-top: 1px solid #CCCCCC;">
                <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <h2 class="text-success" style="font-size: 2.5em;">1300</h2>
                    <p class="t-14">Expedientes procesados online a diario</p>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <h2 class="text-primary" style="font-size: 2.5em;">10</h2>
                    <p class="t-14">Trámites automatizados</p>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <h2 class="text-azulado" style="font-size: 2.5em;">21 días</strong></h2>
                    <p class="t-14">Tiempo promedio de automatización de un trámite</p>
                  </div>
                </div>
              </div>
              <div class="" style="border-top: 1px solid #CCCCCC;">
                <div class="row">
                  <div class="col-xs-12 col-md-6 mt-4 mb-4">
                    <img src="img/tablet.jpg" class="img-responsive w-100 h-100">
                  </div>
                  <div class="col-xs-12 col-md-3 mt-4 mb-4">
                    <p class="t-14"> <strong>Lenguajes utilizados</strong></p>
                    <p class="t-14">Java</p>

                    <p class="t-14"><strong>Base de datos</strong></p>
                    <p class="t-14">SQL - Mysql</p>
                    <p class="t-14"><strong>Sistema operativo</strong></p>
                    <p class="t-14">Red Hat Enterprise Linux</p>
                    <p class="t-14">Server release 7.3 (Maipo)</p>
                    <img class="padding-20" src="img/modernizacion.jpg" alt="DNST" width="80">

                  </div>

                  <div class="col-xs-12 col-md-3 mt-4 mb-4">
                    <p class="t-14"><strong>Lanzamiento</strong></p>
                    <p class="t-14">06/06/18</p>
                    <p class="t-14"><strong>Última versión</strong></p>
                    <p class="t-14">31/5/2019</p>
                  </div>
                  <!--<div class="col-xs-12 col-md-6 t-14">
                    <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                    <p><strong>Ministerio de Producción y Trabajo de la Nación:</strong> Certificaciones Eléctricas, Certificaciones AML Apertura y cierre, DOM, CDV, Certificaciones no eléctricas; <strong>Ministerio de Transporte de la Nación:</strong> Excepciones de Cabotaje.</p>

                  </div>-->

                  <!--                        <div class="col-xs-12 col-md-3" >-->
                  <!--                            <p class="t-14"><strong>Lenguajes utilizados</strong></p>-->
                  <!--                            <p class="t-14">Java</p>-->
                  <!---->
                  <!--                            <p class="t-14"><strong>Base de datos</strong></p>-->
                  <!--                            <p class="t-14">SQL - Mysql</p>-->
                  <!--                            <p class="t-14"><strong>Lanzamiento</strong></p>-->
                  <!--                            <p class="t-14">06/06/18</p>-->
                  <!--                            <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">-->
                  <!--                        </div>-->
                  <!--                        <div class="col-xs-12 col-md-3">-->
                  <!--                            <p class="t-14"><strong>Sistema operativo</strong></p>-->
                  <!--                            <p class="t-14">Red Hat Enterprise Linux</p>-->
                  <!--                            <p class="t-14">Server release 7.3 (Maipo)</p>-->
                  <!--                            <p class="t-14"><strong>Última versión</strong></p>-->
                  <!--                            <p class="t-14">31/5/2019</p>-->
                  <!--                        </div>-->

                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-12 d-flex justify-content-center mt-5">
                    <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                    <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                    <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                    <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                    <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                    <!--                            </a>-->
                    <!--<button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>-->
                    {{--<a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg">--}}
                      <button type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" class="btn-comando contactanos text-center" data-dismiss="modal">
                          Contactanos
                      </button>
                    {{--</a>--}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeFis" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index: 1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="font-size: 1.2em;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel" style="position: fixed"><strong>FISCALIZ.AR</strong> | Fiscalizaciones digitales</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/images.jpg" style="width: 90%;" class="img-responsive">
              </div>
              <div class="col-sm-12 col-md-8 text-center">

              </div>
            </div>
            <br>
            <h6 class="t-14">DESCRIPCIÓN</h6>
            <p class="t-14">Fiscalizar con papel paso a la historia. Con esta aplicación web y mobile <strong>digitalizás todo tu operativo de control</strong> y lográs su <strong>seguimiento en tiempo real</strong>.</p>
            <p class="t-14">Además, su versatilidad permite usarlos en escenarios de censos, exámenes, relevamientos, encuestas.</p>
            <br>
            <div class="container-fluid">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/cambio-tecnologico.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Protocolos configurables </strong></p>
                <p style="font-size: 12px">Flexibilidad en la creación de protocolos de fiscalización con alta velocidad de respuesta</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/horas-extra.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Medición y control</strong></p>
                <p style="font-size: 12px">Visualización de los resultados de fiscalización en tiempo real.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/justicia.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Fin a la arbitariedad</strong></p>
                <p style="font-size: 12px">Automatización de actas disminuyendo la probabilidad de fraude.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/cero-papel.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Cero papel</strong></p>
                <p style="font-size: 12px">Flujo 100% digital incluyendo actas</p>
              </div>
            </div>


            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <p>Planificar y controlar las fiscalizaciones online</p>
              <p>Fiscalizar a través de dispositivos móviles como smartphones, tablets y pads</p>
            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Configurar protocolos de fiscalización en minutos.</p>
              <p>- Controlar online la evolución de las fiscalizaciones.</p>
              <p>- Vincular protocolos de fiscalización con actas y automatizar resultados.</p>
              <p>- Asociar cada acta labrada a un expediente electrónico en GDE.</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC">
              <div class="row" >
                <div class="col-sm-12">
                  <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #2E7D33" >3</h2>
                  <p style="font-size: 12px">Aplicaciones entregadas</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em;" class="text-primary">1315</h2>
                  <p style="font-size: 12px">Fiscalizaciones realizadas</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #008388">7</strong></h2>
                  <p style="font-size: 12px">Protocolos digitalizados</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #6A1B99">14 días</strong></h2>
                  <p style="font-size: 12px">Tiempo promedio de implementación de la solución</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em;" class="text-arandano">1 día</strong></h2>
                  <p style="font-size: 12px">Tiempo promedio de la creación de un protocolo</p>
                </div>
              </div>
            </div>

            <div class="container-fluid" style="padding: 2% 0 0 1%;border-top: 1px solid #CCCCCC;">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="img/fisca-2.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lenguajes utilizados</strong></p>
                  <p>Cordova Apache</p>
                  <p>Python 2.7 </p>
                  <p> Angular JS</p>
                  <p><strong>Base de datos</strong></p>
                  <p>NO SQL - Couchbase</p>
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.3 (Maipo)</p>
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lanzamiento</strong></p>
                  <p>31/01/19</p>
                  <p><strong>Última versión</strong></p>
                  <p>18/09/2019</p>
                </div>
                <div class="col-xs-12 col-md-6 t-14 col-md-offset-6">
                  <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                  <p>Ministerio de Producción y Trabajo de la Nación – Comercio certificados eléctricos; Precios Esenciales y Senasa.</p>
                  <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
                </div>

                <!--                        <div class="col-xs-12 col-md-3">-->
                <!--                            <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">-->
                <!--                        </div>-->

              </div>
              <div class="row" style="margin-top: 5%">
                <div class="center-block" style="text-align: center;margin-top: 30px;margin-bottom: 20px;">
                  <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                  <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                  <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                  <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                  <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                  <!--                            </a>-->
                  <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                  <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                    <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                  </a>

                </div>
              </div>
            </div>

          </div><!---->

        </div>
      </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeMo" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index: 1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.2em;" aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel"><strong>MOTO</strong> | Trámites online</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/min-prodytrab-logo.svg" style="width: 90%;"  class="img-responsive">
              </div>
              <div class="col-sm-12 col-md-8 text-center" style="margin-top: 1%">

              </div>
            </div>
            <br>
            <h6>DESCRIPCIÓN</h6>
            <p class="t-14">Las oficinas públicas digitales son posibles, a través de éste portal web que permite a ciudadanos y/o empresas iniciar un trámite a distancia, sin tener que dirigirse a una dependencia pública y sin papel.</p>
            <br>
            <div class="row">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/moto-negativo.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Fin de la cadetería</strong></p>
                <p style="font-size: 12px">El ciudadano o empresa no tiene que trasladarse para gestionar un trámite,
                  ahorrando así costos y tiempo.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/tramite-electronico.svg" class="margin-20 img-thumbnail border-0" width="55">
                <p class="t-14"><strong>Archivos digitales</strong></p>
                <p style="font-size: 12px">Almacena los documentos subidos al portal permitiendo su reutilización en otros trámites.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/dashboard.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Agilidad</strong></p>
                <p style="font-size: 12px">Permite pago online, notificaciones y servicios de subsanaciones disminuyendo los tiempos de tramitación.
                </p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/eye.svg" class="margin-20 img-thumbnail border-0" width="80">
                <p class="t-14"><strong>Transparencia</strong></p>
                <p style="font-size: 12px">El ciudadano o empresa visualiza el estado del trámite y su costo respectivo.</p>
              </div>
            </div>


            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <p><strong>Para un organismo público: </strong></p>
              <p>Disponibilizar trámites digitales</p>
              <p><strong>Ciudadano o empresa:</strong></p>
              <p>Realizar trámites con el Estado de manera online.</p>
            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Iniciar trámites 100% online desde cualquier dispositivo (PC, Tablet, smartphones) y visualizar su avance.</p>
              <p>- Responder a requerimientos de información o correcciones (subsanaciones) que el Estado precise y delegar la gestión de trámites.</p>
              <p>- Firmar electrónicamente expedientes o trámites</p>
              <p>- Realizar pagos online de trámite.</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC">
              <div class="row" >
                <div class="col-sm-12">
                  <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em;"class="text-success">3</h2>
                  <p class="t-12">Aplicaciones entregadas</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em;"class="text-primary">50</h2>
                  <p class="t-12">Trámites online</p>
                </div>
                <!--  <div class="col-xs-12 col-md-4 text-center">
                      <h2 style="color:white">espacio</strong></h2>
                      <p style="color: white">Tiempo promedio de creación de un protocolo</p>
                  </div>-->
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #008388">21 días</strong></h2>
                  <p class="t-12">Tiempo promedio de implementación de la solución</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #6A1B99">5 días</strong></h2>
                  <p class="t-12">Tiempo promedio de creación de un protocolo</p>
                </div>
              </div>
            </div>

            <div class="container-fluid" style="padding: 2% 0 0 1%;border-top: 1px solid #CCCCCC;">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="img/moto-ilustracion.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lenguajes utilizados</strong></p>
                  <p>PHP 7.2 / Laravel</p>
                  <p>Python 2.7 </p>
                  <p> Angular JS</p>
                  <p><strong>Base de datos</strong></p>
                  <p>SQL - MySql</p>
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.3 (Maipo)</p>
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lanzamiento</strong></p>
                  <p>17/12/18</p>
                  <p><strong>Última versión</strong></p>
                  <p>12/09/2019</p>
                </div>
                <div class="col-xs-12 col-md-6 t-14 col-md-offset-6">
                  <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                  <p><strong>Ministerio de Producción de Provincia de Buenos Aires:</strong> Inscripción de Usuario Zona Franca, Registro Hotelero y afines; <strong>Ministerio de Salud de Provincia de Buenos Aires</strong> y <strong>Ministerio de Justicia de Provincia de Buenos Aires: Entrega de código.</strong></p>
                  <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
                </div>
              </div>
              <div class="row" style="margin-top: 5%">
                <div class="center-block" style="text-align: center;margin-top: 10px;">
                  <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                  <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                  <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                  <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                  <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                  <!--                            </a>-->
                  <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                  <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                    <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeGe" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index: 1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.2em;" aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel"><strong>Tablero de gestión</strong> | Medición y trasparencia</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/min-prodytrab-logo.svg" width="90%" class="img-responsive">
              </div>
              <div class="col-sm-12 col-md-8 text-center" style="margin-top: 1%">

              </div>
            </div>
            <br>
            <h6 class="t-14">DESCRIPCIÓN</h6>
            <p class="t-14">La digitalización del estado posibilita medir su velocidad y resultados en relación a los trámites que atiende. Hemos creado la herramienta para cumplir ese fin, un tablero de gestión que refleja métricas (en tiempo y cantidad) de los trámites que ejecuta un organismo, con un alto nivel de detalle.</p>
            <br>
            <div class="row">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/eye.svg" class="margin-20 img-thumbnail border-0" width="75">
                <p class="t-14"><strong>Transparencia</strong></p>
                <p style="font-size: 12px">Definir las metas de desempeño de cada trámite y medir la performance de los responsables.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/horas-extra.svg" class="margin-20 img-thumbnail border-0" width="60">
                <p class="t-14"><strong>Medición y control</strong></p>
                <p style="font-size: 12px">Analizar el desempeño de un área y sus empleados en relación a un trámite particular</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/informes-y-estadisticas.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Análisis de datos y reportes</strong></p>
                <p style="font-size: 12px">Visualizar rápidamente el estado de un organismo o área y descargar información de respaldo.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/guia-tramites.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Trazabilidad</strong></p>
                <p style="font-size: 12px">Analizar la eficiencia del trámite por cada una de las dependencias vinculadas.</p>
              </div>
            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <p>- Medir el desempeño de trámites y áreas.</p>
              <p>- Medir el desempeño del personal.</p>
            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Visibilizar el estado del mapa de trámites de un organismo y las áreas que lo componen.</p>
              <p>- Informar el desempeño de los trámites relacionando tiempo y cantidad.</p>
              <p>- Informar responsables por expedientes y productividad por empleado.</p>
              <p>- Alertar desvíos en los SLA de cada área y responsables.</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC">
              <div class="row" >
                <div class="col-sm-12">
                  <h4 class="t-14 text-uppercase" style="padding-top: 10px;"">Estadísticas destacadas</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <h2 class="text-success" style="font-size: 2.5em;">9</h2>
                  <p class="t-14">Organismos implementados</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 class="text-primary" style="font-size: 2.5em;">583</h2>
                  <p class="t-14">Tramites visibles</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #008388">14 días</strong></h2>
                  <p class="t-14">Tiempo promedio de implementación</p>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="padding: 2% 0 0 1%;border-top: 1px solid #CCCCCC;">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="img/tablero-ilustracion.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lenguajes utilizados</strong></p>
                  <p>PHP 7.2 </p>
                  <p><strong>Base de datos</strong></p>
                  <p>SQL - MySql</p>
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.3 (Maipo)</p>
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lanzamiento</strong></p>
                  <p>10/10/18</p>
                  <p><strong>Última versión</strong></p>
                  <p>09/08/2019</p>
                </div>
                <div class="col-xs-12 col-md-6 t-14">
                  <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                  <p>Ministerio de Producción y Trabajo de la Nación, CNRT, Ministerio de Salud Nación, Senasa, AgroIndustria, Inti, VUCE, Inpi, Anmat.</p>
                  <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
                </div>
              </div>
              <div class="row" style="margin-top: 5%">
                <div class="center-block" style="text-align: center;margin-top: 10px;">
                  <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                  <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                  <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                  <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                  <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                  <!--                            </a>-->
                  <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                  <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                    <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                  </a>
                </div>
              </div>
            </div>
          </div><!---->
        </div>
      </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeMuni" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index:1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.2em;" aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel"><strong>STM</strong> | Solución trámites municipales</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/min-prodytrab-logo.svg" class="img-responsive" style="width: 90%">
              </div>
              <div class="col-sm-12 col-md-8 text-center" style="margin-top: 1%">

              </div>
            </div>
            <br>
            <h6 class="t-14">DESCRIPCIÓN</h6>
            <p class="t-14">Disponibilizamos a los municipios una solución combinada de plataforma web y de gestión de expedientes, posibilitando que su comunidad realice trámites de manera digital y a distancia. Pero esto no es todo, además de ser una aplicación escalable a todo tipo de trámite, también es configurable sin necesidad de terceros y licencias. </p>
            <br>
            <div class="row">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/cogs.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Configurar trámites</strong></p>
                <p class="t-12">El Municipio puede crear los trámites 100% digitales, acercándose a un clic de distancia a los ciudadanos y empresas.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/anticorrupcion.svg" class="margin-20 img-thumbnail border-0" width="65">
                <p class="t-14"><strong>Medición y control</strong></p>
                <p class="t-12">El municipio y el ciudadano o empresa realizan un seguimiento online de los trámites.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/moto-negativo.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Fin de la cadetería</strong></p>
                <p class="t-12">El ciudadano o empresa no tiene que trasladarse para gestionar un trámite, ahorrando así costos y tiempo.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/tramite-electronico.svg" class="margin-20 img-thumbnail border-0" width="60">
                <p class="t-14"><strong>Archivos digitales</strong></p>
                <p class="t-12">Almacena los documentos subidos al portal permitiendo su reutilización en otros trámites.</p>
              </div>

            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <p><strong>Municipio</strong></p>
              <p>Configurar trámites 100% digitales</p>
              <p><strong>Ciudadano  y empresas</strong></p>
              <p>Iniciar trámites online</p>
            </div>


            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Controlar el estado de los tramites</p>
              <p>- Iniciar trámites online desde cualquier dispositivo (PC, Tablet, smartphones) y visualizar su avance.</p>
              <p>- Responder subsanaciones y delegar la gestión de  trámites.</p>
              <p>- Realizar pagos online.</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <h2 class="text-success" style="font-size: 2.5em;">8</h2>
                  <p class="t-14">Organismos implementados</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 class="text-primary" style="font-size: 2.5em;">6</h2>
                  <p class="t-14">Tramites visibles</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #008388">26 días</strong></h2>
                  <p class="t-14">Tiempo promedio de implementación</p>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="padding: 2% 0 0 1%;border-top: 1px solid #CCCCCC;">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="img/municipios-ilustracion.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lenguajes utilizados</strong></p>
                  <p>PHP 7.2 </p>
                  <p><strong>Base de datos</strong></p>
                  <p>SQL - MySql</p>
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.3 (Maipo)</p>
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lanzamiento</strong></p>
                  <p>17/12/18</p>
                  <p><strong>Última versión</strong></p>
                  <p>17/12/2018</p>
                </div>
                <div class="col-xs-12 col-md-6 t-14">
                  <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                  <p>Municipalidades de: Saladillo, Corrientes, La Plata, Pilar, 9 de Julio, Ituzaingo-Corrientes, San Pedro y San Miguel de Tucumán.</p>
                  <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
                </div>
              </div>
              <div class="row" style="margin-top: 5%">
                <div class="center-block" style="text-align: center;margin-top: 10px;">
                  <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                  <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                  <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                  <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                  <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                  <!--                            </a>-->
                  <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                  <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                    <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                  </a>
                </div>
              </div>
            </div>
          </div><!---->
        </div>
      </div>
    </div>
    <div class="modal fade  common-modal" id="modalLargeConciliar" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index:1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.2em;" aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel"><strong>Concili.AR</strong> | Reclamos online</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/min-prodytrab-logo.svg" class="img-responsive" style="width: 90%">
              </div>
              <div class="col-sm-12 col-md-8 text-center" style="margin-top: 1%">

              </div>
            </div>
            <br>
            <h6 class="t-14">DESCRIPCIÓN</h6>
            <p class="t-14">Los reclamos entre consumidores y empresas se gestionan, resuelven y resguardan digitalmente.
              Desarrollamos un portal donde las dos partes pueden comunicarse, negociar y realizar acuerdos sin recurrir a una oficina y sin intervención del Estado.
              <br><br>
              Además, todas las resoluciones sobre los reclamos son almacenadas en la Blockchain Federal Argentina (BFA).
              <br><br>

              Desde la perspectiva de las empresas, todas sus negociaciones quedan registradas y reflejadas a través de indicadores de desempeño definidos, a través de los cuales puede medir la velocidad de resolución, cantidad y cualidad. Por su parte, la autoridad de aplicación, cuenta con pleno acceso a esta información.</p>
            <br>
            <div class="row">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/anticorrupcion.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Trazabilidad</strong></p>
                <p class="t-12">Todo reclamo es documentado de principio a fin</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/seguridad-documento.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Auditoría</strong></p>
                <p class="t-12">Toda comunicación entre las partes es resguardada y accesible</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center" style="margin-top: 30px">
                <img src="img/eye.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Transparencia</strong></p>
                <p class="t-12">Los compromisos asumidos son grabados en la blockchain</p>
              </div>
              <!--                    <div class="col-sm-12 col-md-3 text-center">-->
              <!--                        <img src="img/tramite-electronico.svg" class="margin-20 img-thumbnail border-0" width="60">-->
              <!--                        <p class="t-14"><strong>Archivos digitales</strong></p>-->
              <!--                        <p class="t-12">Almacena los documentos subidos al portal permitiendo su reutilización en otros trámites.</p>-->
              <!--                    </div>-->

            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <!--                    <p><strong>Municipio</strong></p>-->
              <p>Contacto entre consumidor y empresa de manera virtual facilitando la resolución de conflictos</p>
              <!--                    <p><strong>Ciudadano  y empresas</strong></p>-->
              <!--                    <p>Iniciar trámites online</p>-->
            </div>


            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Gestión por indicadores y seguimiento de reclamos tanto por consumidores, empresas y Estado.</p>
              <p>- Resguardo de reclamos y compromisos asumidos por las partes.</p>
              <p>- Grabado de acuerdos en la blockchain</p>
              <p>- Aplicación 100% mobile</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #2E7D33">1200</h2>
                  <p class="t-14">Reclamos diarios estimados</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #0072BB">800</h2>
                  <p class="t-14">Empresas que van a participar</p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #008388">6 días</strong></h2>
                  <p class="t-14">Tiempo promedio estimado de resolución </p>
                </div>
                <div class="col-xs-12 col-md-4">
                  <h2 style="font-size: 2.5em; color: #6A1B99">80%</strong></h2>
                  <p class="t-14">Tasa de resolución esperada</p>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="padding: 2% 0 0 1%;border-top: 1px solid #CCCCCC;">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="img/conciliar-ilustracion.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Lenguajes utilizados</strong></p>
                  <p>PHP</p>
                  <p><strong>Base de datos</strong></p>
                  <p>SQL - MySql</p>
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.4</p>
                </div>
                <div class="col-xs-12 col-md-3 t-14">
                  <p><strong>Sistema operativo</strong></p>
                  <p>Red Hat Enterprise Linux</p>
                  <p>Server release 7.4</p>
                  <p><strong>Lanzamiento</strong></p>
                  <p>A definir</p>
                </div>
                <div class="col-xs-12 col-md-6 t-14">
                  <!--                            <div style="height: 1px; width: 200%; background-color: #CCCCCC; margin-top: 60px"></div>-->
                  <p style="color: #F9A822"><strong>En desarrollo</strong></p>
                  <p>Defensa del consumidor</p>
                  <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
                </div>
              </div>
              <div class="row" style="margin-top: 5%">
                <div class="center-block" style="text-align: center;margin-top: 10px;">
                  <!--                            <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                  <!--                            <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                  <!--                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target=".bd-contacto-modal-lg">Contacto</button>-->
                  <!--                            <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                  <!--                                <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                  <!--                            </a>-->
                  <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                  <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                    <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                  </a>
                </div>
              </div>
            </div>
          </div><!---->
        </div>
      </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeLibro" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="z-index:1050;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.2em;" aria-hidden="true">&times;</span></button>
            <p class="modal-title" id="modalLargeLabel"><strong>Libro de reclamos y sugerencias</strong> | Registro digital</p>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <img src="img/min-prodytrab-logo.svg" class="img-responsive" style="width: 90%">
              </div>
              <div class="col-sm-12 col-md-8 text-center" style="margin-top: 1%">

              </div>
            </div>
            <br>
            <h6 class="t-14">DESCRIPCIÓN</h6>
            <p class="t-14">Hemos digitalizado el libro de reclamos y sugerencias de los alojamientos registrados en Provincia de Buenos Aires.
              Ahora, si sos un huésped de un alojamiento, podes valorizar sus atenciones digitalmente, posibilitando que el alojamiento las revise y gestione activamente.
              <br><br>
              Finalmente, todo reclamo y sugerencia es visible a los fiscalizadores del organismo de control de la Provincia, sumando transparencia y posibilidad de realizar auditorías que mejoren las experiencias.
              La aplicación es versátil por lo qué puede ser reutilizada para cualquier tipo de servicio.</p>
            <br>
            <div class="row">
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/tramite-electronico.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Digitalización</strong></p>
                <p class="t-12">Ahorro 100% de papel, la información se encuentra sistematizada.</p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/anticorrupcion.svg" class="margin-20 img-thumbnail border-0" width="65">
                <p class="t-14"><strong>Trazabilidad</strong></p>
                <p class="t-12">Todo reclamo o sugerencia queda registrada y es visible a la autoridad de control </p>
              </div>
              <div class="col-sm-12 col-md-3 text-center">
                <img src="img/informes-y-estadisticas.svg" class="margin-20 img-thumbnail border-0" width="70">
                <p class="t-14"><strong>Reportes y medición</strong></p>
                <p class="t-12">Visualización de estado de situación, alertas de fiscalización e informes en tiempo real</p>
              </div>
              <!--                    <div class="col-sm-12 col-md-3 text-center">-->
              <!--                        <img src="img/tramite-electronico.svg" class="margin-20 img-thumbnail border-0" width="60">-->
              <!--                        <p class="t-14"><strong>Archivos digitales</strong></p>-->
              <!--                        <p class="t-12">Almacena los documentos subidos al portal permitiendo su reutilización en otros trámites.</p>-->
              <!--                    </div>-->

            </div>

            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Función principal</h5>
              <!--                    <p><strong>Municipio</strong></p>-->
              <p>Registro digital por parte del huésped de los reclamos y sugerencias que deseen realizarle a los prestadores turísticos de la PBA.</p>
              <!--                    <p><strong>Ciudadano  y empresas</strong></p>-->
              <!--                    <p>Iniciar trámites online</p>-->
            </div>


            <div class="container-fluid t-14">
              <h5 class="t-14 text-uppercase">Otras funcionalidades</h5>
              <p>- Evaluación de performance de todos los prestadores turísticos registrados en el Registro de Hotelería y afines de la provincia de Buenos Aires.</p>
              <p>- Posibilita al ciudadano realizar un reclamo a través de cualquier dispositivo móvil, adjuntar fotos en tiempo real, darle un seguimiento, recibir respuestas de los alojamientos.</p>
              <p>- La autoridad de aplicación puede evaluar información para prevenir problemas edilicios y de infraestructura dentro de la provincia y realizar análisis desagregados por partido, localidad o tipo de alojamientos para planificar las inspecciones de manera efectiva.</p>
              <p>- Los fiscalizadores pueden consultar y aportar información al historial del alojamiento auditado. </p>
              <p>- La autoridad de aplicación puede realizar un seguimiento a los reclamos que inicien acciones administrativas.</p>
            </div>
            <div class="container-fluid" style="border-top: 1px solid #CCCCCC; margin-top: 5%">
              <!-- <div class="row">
                   <div class="col-sm-12">
                       <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                   </div>
               </div>-->
              <div class="row">
                <!--<div class="col-xs-12 col-md-12" style="padding: 1%">
                    <h3>Estadisticas destacadas</h3>
                    <p>Se medirán la cantidad de reclamos por huesped y la cantidad de reclamos por prestador turistico</p>
                </div>-->
                <!--                        <div class="row">-->
                <div class="col-xs-12 col-md-12"">
                <h4 class="t-14 text-uppercase" style="padding-top: 10px;">Estadísticas destacadas</h4>
                <p class="t-14">Se medirá la cantidad y cualidad de reclamos que reciba cada prestador turístico.
                  Adicionalmente, se estima que 6000 prestadores turísticos se incorporarán progresivamente a la plataforma. </p>
              </div>
              <!--                            </div>-->
              <!--                        </div>-->
              <!--<div class="col-xs-12 col-md-4">
                  <h2 class="text-success" style="font-size: 2.5em;">1200</h2>
                  <p class="t-14">Cantidad de reclamos por huésped</p>
              </div>
              <div class="col-xs-12 col-md-4">
                  <h2 class="text-primary" style="font-size: 2.5em;">800</h2>
                  <p class="t-14">Cantidad de reclamos por prestador turístico</p>
              </div>-->
              <!--                        <div class="col-xs-12 col-md-4">-->
              <!--                            <h2 style="font-size: 2.5em; color: #008388">6 días</strong></h2>-->
              <!--                            <p class="t-14">Tiempo promedios de resolución estimados</p>-->
              <!--                        </div>-->
              <!--                        <div class="col-xs-12 col-md-4">-->
              <!--                            <h2 style="font-size: 2.5em; color: #008388">80%</strong></h2>-->
              <!--                            <p class="t-14">Tasa de solución esperada</p>-->
              <!--                        </div>-->
            </div>
          </div>
          <div class="container-fluid" style="padding: 0%;border-top: 1px solid #CCCCCC;">
            <div class="row" style="margin-top: 5%">
              <div class="col-xs-12 col-md-6">
                <img src="img/libro-ilustracion.png" class="img-responsive">
              </div>
              <div class="col-xs-12 col-md-3 t-14">
                <p><strong>Lenguajes utilizados</strong></p>
                <p>PHP Simphony</p>
                <p><strong>Base de datos</strong></p>
                <p>SQL -Mysql</p>
                <p><strong>Sistema operativo</strong></p>
                <p>Linux</p>
              </div>
              <div class="col-xs-12 col-md-3 t-14">
                <p><strong>Lanzamiento</strong></p>
                <p>25/09/2019</p>
                <p><strong>Última versión</strong></p>
                <p>16/09/2019 </p>
                <!--                            <p style="color: #2E7D33"><strong>Implementado en:</strong></p>-->
                <!--                            <p>Provincia de Buenos Aires</p>-->
              </div>
              <div class="col-xs-12 col-md-6 t-14">
                <p style="color: #2E7D33"><strong>Implementado en:</strong></p>
                <p>Provincia de Buenos Aires</p>
                <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">
              </div>
              <!--                        <div class="col-xs-12 col-md-3">-->
              <!--                            <img class="padding-20" src="img/logo.svg" alt="DNST" width="80">-->
              <!--                        </div>-->

            </div>
            <div class="row" style="margin-top: 5%">
              <div class="center-block" style="text-align: center;margin-top: 10px;">
                <!--                        <button id="closeModal" type="button" class="btn btn-default hidden-lg" data-dismiss="modal"><span>Cerrar</span></button>-->
                <!--                        <button type="button" class="btn btn-default btn-lg btn-block hidden-lg" data-dismiss="modal">Cerrar</button>-->
                <!--                        <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">-->
                <!--                            <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>-->
                <!--                        </a>-->
                <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                <a type="button" data-toggle="modal" data-target=".bd-contacto-modal-lg" href="">
                  <button type="button" class="btn btn-success contactanos" data-dismiss="modal"><span>Contactanos</span></button>
                </a>
              </div>
            </div>
          </div>
        </div><!---->
      </div>
    </div>
    </div>

    <div class="modal fade  common-modal" id="modalLargeGood" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel" style="border-radius: 5%;z-index: 99999999;">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="">
            <div style="padding: 10px 10px 0px 20px;">
              <img src="img/check-circle.svg" alt="correcto" width="50">
              <h3>¡Mensaje recibido con éxito!</h3>

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <h5><img src="img/file-text-o.svg" alt="datos" class="d-flex"> Estos son los datos de tu mensaje</h5>
                </div>
              </div>
              <hr style="width: 90%">
              <h5>Producto o servicio</h5>
              <p id="producto-response">Numero dato</p>
              <h5>Organismo</h5>
              <p id="org-response"></p>
              <h5>Nombre y Apellido</h5>
              <p id="nombre-response"></p>
              <h5>Correo electrónico</h5>
              <p id="mail-response">Traer correo electronico</p>
              <h5>Consulta o mensaje</h5>
              <p id="mensaje-response">Trar consulta o mensaje</p>

            </div>
          </div>
          <hr>
          <div class="visible-md visible-lg hidden-xs hidden-sm ocultar-print" style="margin-left: 20%">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
            <!--                <a type="button"  class="btn btn-primary" style="margin-left: 5%" download="msjrecibido">DESCARGAR COMPROBANTE</a>-->
            <a type="button" class="btn btn-primary" onclick="javascript:window.imprimirDIV('modalLargeGood');">Descargar comprobante </a>

          </div>
          <div class="hidden-lg hidden-md visible-xs visible-sm ocultar-print">
            <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="javascript:window.imprimirDIV('modalLargeGood');">Descargar comprobante</button>
          </div>
        </div>
      </div>
    </div>


{{--Modal de contacto--}}
    <div class="modal fade bd-contacto-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-contacto" style="z-index:1050;">
      <div class="modal-dialog modal-md mt-0 pt-0">
        <div class="modal-content">
          <div>
            <form id="prodmodal" method="POST" class="p-x-2 p-y-2" action={{route('contact')}}>
                {{--action="sendemailModal.php"--}}
                @csrf
              <p class="text-center mb-0"><strong>Escribinos, ¡no seas timido!</strong></p>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <label for="defaultFormCardNameEx" class="text-muted mt-0" style="margin-top: 10%">Producto</label>
                  <select id="producto" class="form-control" name="producto" style="width: 100%">
                    <option value="Jimenez">Jimenez</option>
                    <option value="Fiscalizar">Fiscalizar</option>
                    <option value="Moto">Moto</option>
                    <option value="Tablero de gestión">Tablero de gestión</option>
                    <option value="Trámites municipales">Trámites municipales</option>
                    <option value="Concili.Ar">Concili.Ar</option>
                    <option value="Libro de reclamos y sugerencias">Libro de reclamos y sugerencias</option>
                  </select>
                </div>
              </div>
              <label for="" class="text-muted">Organismo</label>
              <br>
              <input id="organismo" type="text" placeholder="Organismo" class="form-control"  name="organismo" required />
              <div class="alert alert-danger alert-dismissible organismo" style="display: none" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <label for="" class="text-muted">Nombre</label>
              <br>
              <input id="nombre" type="text" placeholder="Nombre y Apellido" class="form-control"  name="nombre" required />
              <div class="alert alert-danger alert-dismissible nombre" style="display: none" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <label for="" class="text-muted">Mail</label>
              <br>
              <input id="mail" type="email" class="form-control" placeholder="tu@email.com"  name="mail" required />
              <div class="alert alert-danger alert-dismissible mail" style="display: none" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <label for="" class="text-muted">Mensaje</label>
              <br>
              <textarea maxlength="500" id="mensajemodal" name="mensaje" class="form-control" placeholder="Escribí tu mensaje ...." required /></textarea>
              <div class="alert alert-danger alert-dismissible mensajemodal" style="display: none" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="enviar">
                <div class="contact-check">
                </div>
                <div class="" style="text-align: right">
                  <button id="closeModal" type="button" class="btn-cerrar" data-dismiss="modal"><span>Cerrar</span></button>
                  <button class="btn-comando btn-group-xs" id="enviar" name="send" type="submit">Enviar</button>
                </div>
                <div class="clear"> </div>
                <div id="responsemodal"></div>
            </form>
          </div>
        </div>

      </div>
    </div>
    </div>

    <!--   <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
         <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

         <div>

           <h3>No seas timido, escribinos! </h3>

             <form method="post" class="p-x-2 p-y-2">



             <label for="defaultFormCardNameEx" class="text-muted">Organismo</label>

             <input type="text" placeholder="Organismo" class="form-control"  name="customer_name" required />


             <label for="defaultFormCardEmailEx" class="text-muted">Nombre</label>

             <input type="text" placeholder="Nombre y Apellido" class="form-control"  name="customer_name" required />


             <label for="defaultFormCardEmailEx" class="text-muted">Mail</label>

             <input type="email" class="form-control" placeholder="tu@email.com"  name="customer_email" required />


             <label for="defaultFormCardEmailEx" class="text-muted">Mensaje</label>

             <textarea  name="message" class="form-control" placeholder="Deja tu mensaje ...." required /></textarea>



             <div class="enviar">
                 <div class="contact-check">

                 </div>
                 <div class="">
                     <button class="btn btn-success btn-group-xs" name="send" type="submit">Enviar</button>
                 </div>

                 <div class="clear"> </div>
                 </form>
         </div>



       <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
     </div>-->

    </div>










   <!-- <div class="container">
      <div class="card-deck">
        <div class="card col-md-4 p-0">
          <img class="card-img-top" src="img/images.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card col-md-4 p-0">
          <img class="card-img-top" src="img/images.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>

        </div>
        <div class="card col-md-4 p-0">
          <img class="card-img-top" src="img/images.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>

        </div>
      </div>


      <div class="card-deck ">
        <div class="card col-md-4 p-0">
          <img class="card-img-top" src="img/images.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>

        </div>











    </div>
    </div>-->
  </section>

<!--Lina de separacion-->
<hr class="container">


    <section class="p-b-0">
      <div class="container">
        <h2>Creamos soluciones digitales</h2>

      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-fucsia"><i class="fa fa-bank"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Economía</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-success"><i class="fa fa-graduation-cap"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Educación</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-info"><i class="fa fa-flag"></i></div>
              <div class="panel-body">
                <h3>Ministerio del Interior</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-warning"><i class="fa fa-bicycle"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Transporte</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-primary"><i class="fa fa-hdd-o"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Modernización</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-maiz"><i class="fa fa-ambulance"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Salud</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="panel panel-default panel-icon" href="#">
              <div class="panel-heading bg-uva"><i class="fa fa-book"></i></div>
              <div class="panel-body">
                <h3>Ministerio de Cultura</h3>
                <p>Evalúa expedientes electrónicos en forma automática y autónoma, orquestando acciones administrativas e informativas.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>



    <hr class="container">

<!--Construir y evoluvcionar-->


  <section class="p-b-0">
    <div class="container">
      <h2>Construir y evolucionar</h2>

    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="accordion">
            <div class="card tocame1">
              <div class="card-header despliegue" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h5 class="mb-0">
                  <button class="collapsed border-0 fondo-btn text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Libro de reclamos y <span class="corte">sugerencias</span>

                  </button>
                  <span class="float-right mt-2">
                      <i class="text-primary operacion1 fa fa-plus"></i>
                  </span>
                </h5>
              </div>
              <!--id="collapseOne"-->
              <div style="display: none" class="collapse mostrar1" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card tocame2 mt-2">
              <div class="card-header despliegue" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                  <button class="collapsed border-0 fondo-btn">
                    Assessments TI
                  </button>
                  <span class="float-right mt-2">
                    <i class="text-primary operacion2 fa fa-plus"></i>
                  </span>
                </h5>
              </div>
              <div style="display: none" class="collapse border-0 fondo-btn mostrar2" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card tocame3 mt-2">
              <div class="card-header despliegue" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                  <button class="collapsed border-0 fondo-btn">
                    Autopartes
                  </button>
                  <span class="float-right mt-2">
                    <i class="text-primary operacion3 fa fa-plus"></i>
                  </span>
                </h5>
              </div>
              <div style="display: none" class="collapse mostrar3" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>

      </div>
        <div class="col-md-6">
          <h5 class="lead">Cada proyecto es una experiencia única, la cual combina distintos talentos, tecnologías y tendencias</h5>


          <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- TONGLESLIDE -->










    <section class="p-b-0">
      <div class="container">
        <h2>Nuevas tecnologias</h2>

      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div id="accordion">
              <div class="">

                <div id="headingOne">
                  <h5>
                    <a class="btn border-0 text-decoration-none w-100 text-left pregunta1 panel mb-0 aca" href="" data-toggle="collapse" aria-expanded="false">
                        Blockchain
                    </a>
                  </h5>
                </div>

              </div>
              <div class="">
                <div class="" id="headingTwo">
                  <h5>
                    <a class="btn border-0 collapsed text-decoration-none pregunta2 panel w-100 text-left mb-0" href="" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      Inteligencia artificial
                    </a>
                  </h5>
                </div>
                <!--<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>-->
              </div>
              <div>
                <div class="" id="headingThree">
                  <h5>
                    <a class="btn border-0 collapsed text-decoration-none pregunta3 panel w-100 text-left mb-0" href="" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" >
                      Automotizacion Robotica de Procesos
                    </a>
                  </h5>
                </div>
                <!--<div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>-->
              </div>
              <div>
                <div class="" id="headingThree">
                  <h5>
                    <a class="btn border-0 collapsed text-decoration-none pregunta4 panel w-100 text-left mb-0" href="" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                     Aplicaciones moviles
                    </a>
                  </h5>
                </div>
                <!--<div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>-->
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <div class="respuesta1" style="display: none">
              <h5 class="lead">Cada proyecto es una experiencia única, la cual combina distintos talentos, tecnologías y tendencias</h5>
                <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
            </div>

            <div class="respuesta2" style="display: none">
              <h5 class="lead">El asisment es hermoso</h5>
              <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
            </div>

            <div class="respuesta3" style="display: none">
              <h5 class="lead">SOl</h5>
              <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
            </div>

            <div class="respuesta4" style="display: none">
              <h5 class="lead">Luna</h5>
              <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
            </div>

          </div>

          <!--<div class="col-md-6 collapse" id="collapse2" aria-labelledby="headingOne" data-parent="#accordion">
            <h5 class="lead">El asisment es hermoso</h5>


            <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
          </div>-->

          <!--<div class="col-md-6 collapse" id="collapse3" aria-labelledby="headingOne" data-parent="#accordion">
            <h5 class="lead">El asisment es hermoso</h5>


            <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
          </div>

          <div class="col-md-6 collapse" id="collapse4" aria-labelledby="headingOne" data-parent="#accordion">
            <h5 class="lead">El asisment es hermoso</h5>


            <p  style="font-size: 16px;">Abordamos cada proyecto de acuerdo a su complejidad, con la perspectiva de crear herramientas lo más escalables e integrables posible, a efectos de replicarlo en el resto del Estado independientemente si es nacional, provincial o municipal.</p>
          </div>-->

        </div>
      </div>
    </section>
    <!-- TONGLESLIDE -->




    <section id="" class="bg-gray">
      <div class="container">

        <div class="row video-row">
          <div class="col-md-5  col-xs-12 video-text">
            <!--<h3>Contacto</h3>
            <p>Direccion: Av. Pres. Julio A. Roca 651</p>
            <p>Codigo postal: C1067ABB</p>
            <p>Telefono: 0800-333-7963</p>
            <p>Correo electronico: info@produccion.gob.ar</p>-->

            <div class="">
              <div class="panel-pane pane-area-contacto">
                <div class="pane-content">
                  <h2 class="h3 text-uppercase">Contacto</h2>
                  <p class="margin-40">
                    <strong style="font-weight: bold">Dirección:</strong> Av. Pres. Julio A. Roca 651<br>
                    <strong style="font-weight: bold">Código postal:</strong>
                    C1067ABB<br>
                    <strong style="font-weight: bold">Teléfono:</strong> 0800-333-7963<br>
                    <strong style="font-weight: bold">Correo electrónico:</strong>
                    <a href="mailto:info@produccion.gob.ar ">info@produccion.gob.ar </a><br></p></div></div>


              <h5>Redes sociales del área</h5>



              <div class="social-share">
                <ul class="list-inline d-flex d-inline-flex">
                  <li>
                    <a href="http://www.facebook.com/ProdArgentina" target="_blank">
                      <span class="sr-only">Facebook</span>
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/PRODUCCION_ARG" target="_blank">
                      <span class="sr-only">Twitter</span>
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.instagram.com/produccionytrabajo" target="_blank">
                      <span class="sr-only">Instagram</span>
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.youtube.com//channel/UCHOdvOZ0I3vdv59jqDyuC6w/featured" target="_blank">
                      <span class="sr-only">Youtube</span>
                      <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>

            <!--<div class="ml-5">
             <span style="font-size: 2rem; color: cadetblue"> <i class="fa fa-twitter"></i></span>
              <span class="ml-2" style="font-size: 2rem; color: blue"> <i class="fa fa-facebook"></i></span>
              <span class="ml-2" style="font-size: 2rem; color: red"> <i class="fa fa-Instagram"></i></span>
              <span class="ml-2" style="font-size: 2rem; color: cadetblue"> <i class="fa fa-twitter"></i></span>
            </div>-->

            </div>
          </div>
          <div class="col-md-3 col-md-offset-1 col-xs-12">
            <div class="bg-modal">

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7385826718373!2d-58.37803618477017!3d-34.61077138045764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccad475ec17af%3A0xc1c276b978c1caf1!2sAv.%20Pres.%20Julio%20A.%20Roca%20651%2C%20C1057%20CABA!5e0!3m2!1ses-419!2sar!4v1589215728029!5m2!1ses-419!2sar" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
              {{--<div id="map" style="width: 100vh; height: 50vh"></div>--}}
          </div>
        </div>

      </div>
    </section>


  </main>

  <!--position:fixed; bottom:-10px; width:100%; padding-top:40px;-->



{{--<script>




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
      else if(!$('.pregunta1').hasClass('puesto'))  {
        $(".respuesta1").show();
        $(".pregunta1").addClass('puesto');

      }
      else{
          $(".respuesta1").removeClass("puesto");

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
        $(".pregunta2").removeClass('puesto');

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

</script>--}}
@endsection
