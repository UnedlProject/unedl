<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unedl</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<div class="brandingP">
    <div class="container">
        <div class="navbar-brand nav" id="brand">
            <a href="{{ url('/') }}"><img src="/imagenes/logoparaweb.png" alt="brand"></a>
        </div>
    </div>
</div>
<div class="color-dorado">
</div>
<div class="color-amarillo">
</div>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a id="font-color" href="{{ url('/login') }}">Login</a></li>
                        <li><a id="font-color" href="{{ url('/register') }}">Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Vistas</span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li class="color-fondo"><a class="color" href="{{ url('/ViewHome')}}"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Procesos</a></li>
                                <li class="color-fondo"><a class="color" href="{{ url('/ViewClientes')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cliente</a></li>
                                <li class="color-fondo"><a class="color" href="{{ url('/ViewFinanciero')}}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Financiero</a></li>
                                <li class="color-fondo"><a class="color" href="{{ url('/ViewCrecimiento')}}"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Crecimiento</a></li>
                                <li class="color-fondo"><a class="color" href="{{ url('/ViewSalida')}}"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Salidas</a></li>
                             </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Captura</span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li class="color-fondo"><a class="color" href="{{url('/home')}}"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Procesos</a></li>
                                <li class="color-fondo"><a class="color" href="{{url('/cliente')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes</a></li>
                                <li class="color-fondo"><a class="color" href="{{url('/financiero')}}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Financieros</a></li>
                                <li class="color-fondo"><a class="color" href="{{url('/crecimientos')}}"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Crecimientos</a></li>
                                <li class="color-fondo"><a class="color" href="{{url('/salidas')}}"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Salidas no conformes</a></li>
                              </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Reportes</span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                    <li class="color-fondo"><a class="color" ><span class="glyphicon glyphicon-" aria-hidden="true"></span> Mensual</a></li>
                                    <li class="color-fondo"><a class="color"><span class="glyphicon glyphicon-" aria-hidden="true"></span> Semestral</a></li>
                                    <li class="color-fondo"><a class="color"><span class="glyphicon glyphicon-" aria-hidden="true"></span> Anual</a></li>
                                    <li class="color-fondo"><a class="color"><span class="glyphicon glyphicon-" aria-hidden="true"></span> Ciclo escolar</a></li>
                            </ul>
                        </li>
                            <li class="nav-item">
                         <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Cerrar sesion</a>
                             </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <script type="text/javascript">
        $(".campos").hide();
        $(document).ready(function(){
            $("#show").click(function(){
                $(".campos").animate({
                    height: 'toggle'
                });
            });
        });
        $(".campos1").hide();
        $(document).ready(function(){
            $("#show1").click(function(){
                $(".campos1").animate({
                    height: 'toggle'
                });
            
            });
        });
        $(".campos2").hide();
        $(document).ready(function(){
            $("#show2").click(function(){
                $(".campos2").animate({
                    height: 'toggle'
                });
            });
        });
        $('#salidas_fecha').datepicker({
            format: 'yyyy-mm-dd'
        });
        document.getElementById('role').addEventListener('change', function(event){
    var codigo = document.querySelector('#code');
    if(event.target.value === 'Administrador'||event.target.value === 'Responsable de calculo') {
        codigo.style.display = 'block';
    } else {
        codigo.style.display = 'none';
    }
});
    </script>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</body>
</html>
