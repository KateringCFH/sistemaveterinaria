<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="Dashboard" name="author"/>
        <meta content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" name="keyword"/>
        <title>
            ADMINISTRADOR
        </title>
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/css/table-responsive.css')}}" rel="stylesheet"/>
    </head>
    <body>
        <section id="container">
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-original-title="Toggle Navigation" data-placement="right">
                    </div>
                </div>
                <!--logo start-->
                <a class="logo" href="index.html">
                    <b>
                        VETERINARIA
                    </b>
                </a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                      <li>
                            <a class="logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div class="nav-collapse " id="sidebar">
                    <ul class="sidebar-menu" id="nav-accordion">
                      <h5 class="centered">
                        {{ Auth::user()->name}}
                        {{ Auth::user()->app}}<br/><br/>
                        {{ Auth::user()->cargo }}
                      </h5><hr/>
                        <li class="mt">
                            <a>
                                <i class="fa fa-dashboard">
                                </i>
                                <span>
                                    Inicio
                                </span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <i class="fa fa-user">
                                </i>
                                <span>
                                    Propietario
                                </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('/propietario')}}">
                                        Listado de propietarios
                                    </a>
                                </li>
                            </ul>
                            <ul class="sub">
                                <li>
                                    <a href="{{action('PropietarioController@create') }}">
                                        Registrar propietario
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <i class="fa fa-paw">
                                </i>
                                <span>
                                    Mascotas
                                </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('/mascota')}}">
                                        Listado de mascotas
                                    </a>
                                </li>
                            </ul>
                            <ul class="sub">
                                <li>
                                    <a href="{{action('MascotaController@create')}}">
                                        Registrar mascota
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <i class="fa fa-clipboard">
                                </i>
                                <span>
                                    Historial
                                </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('/historial')}}">
                                        Listado de historial
                                    </a>
                                </li>
                            </ul>
                            <ul class="sub">
                                <li>
                                    <a href="{{action('HistorialController@create')}}">
                                        Registro de historial
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <i class="fa fa-group">
                                </i>
                                <span>
                                    Empleados
                                </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('/personal')}}">
                                        Listado de empleados
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <i class="fa fa-pencil-square-o">
                                </i>
                                <span>
                                    Reportes
                                </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('/citas')}}">
                                        Reporte de Citas
                                    </a>
                                    <a href="{{url('/rhistorial')}}">
                                        Reporte de Historial
                                    </a>
                                    <a>
                                        Reporte de Expediente
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
            <!--sidebar end-->
            <!-- contenido -->
            @yield('contenido');
            <!-- fin contenido -->
        </section>
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script class="include" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/common-scripts.js')}}"></script>
    </body>
</html>
