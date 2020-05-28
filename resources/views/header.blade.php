@extends('layouts.master')
@section('content')
<header>
    <nav>
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

            <div class="nav-link  col-sm-2 mb-3 mt-3" style="height: 3.5em">
                <!--<ul class="navbar-nav mr-auto">
                  <li class="nav-item contorno">-->
                <a href="#" class="panel contorno text-decoration-none text-uppercase d-flex justify-content-center align-items-center h-100" style="font-family: Roboto; height: 2.4em">Mi Argentina <span class="sr-only">(current)</span></a>
                <!-- </li>
               </ul>-->
            </div>
        </div>
    </nav>
</header>
@endsection
