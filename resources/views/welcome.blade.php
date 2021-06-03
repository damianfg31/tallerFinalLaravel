<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taller Final - Economic World</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #17202A;
                font-family: 'Poppins', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            p {
                font-size: 17px;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 85px;
            }

            .links > a {
                color: #17202A;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 20px
            }

            .m-b-md {
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        @extends('app')
        @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Economic World 
                </div>

                <div class="links">
                    <p>Taller Final - Mostrar tipos de Monedas en el Mundo (Dele click al botón "Ver Página Monedas en el Mundo")</p>
                    <a href="{{ route('monedas.index') }}" class="btn btn-info" style="background-color: #16A085; color: #FFFFFF;">Ver Página Monedas en el Mundo</a>
                </div>
            </div>
        </div>
    </body>
    @stop
</html>
