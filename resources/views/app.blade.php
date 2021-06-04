<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taller Final - Economic World</title>

    <!-- Custom CSS -->
    @section('styles_laravel')
 
    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">
 
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    @show
 
    @yield('mis_estilos')
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Economic World <i class="fas fa-globe-americas"></i></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="disabled" href="#">Empresas <i class="fas fa-building"></i> </a></li>
                    <li><a class="disabled" href="#">Nuestros Usuarios <i class="fas fa-user-tie"></i> </a></li>
                    <li><a href="#">Países <i class="fas fa-flag"></i> </a></li>
                    <li><a class="active" href="{{url('/monedas')}}">Monedas <i class="fas fa-dollar-sign"></i> </a></li>
                    <li><a href="#">Inversiones <i class="far fa-chart-bar"></i> </a></li>
                    <li><a href="#">Formas de Pago <i class="fas fa-money-check-alt"></i> </a></li>
                    <li><a href="#">Ayuda <i class="fas fa-question"></i> </a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Buscar...">
                </form>
            </div>
        </div>
    </nav>
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <!-- Aquí incluiremos el contenido de nuestra aplicación -->
            @yield('content')
     
            </div>
        </div>
    </div>
     
    <!-- Scripts -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>