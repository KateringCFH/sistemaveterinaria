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
        <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">
        <link href="{{asset('assets/css/style.css" rel="stylesheet')}}">
        <link href="{{asset('assets/css/style-responsive.css" rel="stylesheet')}}">
        <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>

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
                            <a href="/dashboard">
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
                                    <a href="{{url('/mascota')}}">
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
                                    <a href="{{url('/r_h')}}">
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
        <script src="{{asset('assets/js/jquery-1.8.3.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script class="include" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.sparkline.js')}}"></script>
        <script src="{{asset('assets/js/common-scripts.js')}}"></script>
        <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>
        <script src="{{asset('assets/js/chartjs-conf.js')}}"></script>
        <script type="{{asset('text/javascript" src="assets/js/gritter/js/jquery.gritter.js')}}"></script>
        <script type="{{asset('text/javascript" src="assets/js/gritter-conf.js')}}"></script>
        <script src="{{asset('assets/js/sparkline-chart.js')}}"></script>
	      <script src="{{asset('assets/js/zabuto_calendar.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    </body>
</html>
