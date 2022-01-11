<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/c53c06c750.js"></script>

    <title>SITECNOL</title>
    <style>

        body{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        footer{
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 2%;
            background-color:black
        }
        
        ul{
            list-style-type: none;
        }
        .app-logo img{
            width: 140px;
        }

        .imagenHome{
            width: 800px;
            max-width: 100%;
        }

        .btn-flotante {
            font-size: 16px; /* Cambiar el tamaño de la tipografia */
            text-transform: uppercase; /* Texto en mayusculas */
            font-weight: bold; /* Fuente en negrita o bold */
            color: #ffffff; /* Color del texto */
            border-radius: 5px; /* Borde del boton */
            letter-spacing: 2px; /* Espacio entre letras */
            background-color: #000000; /* Color de fondo */
            padding: 18px 30px; /* Relleno del boton */
            position: fixed;
            bottom: 40px;
            right: 40px;
            transition: all 300ms ease 0ms;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            z-index: 99;
        }
        .btn-flotante:hover {
            background-color: #46464bbd; /* Color de fondo al pasar el cursor */
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-7px);
        }
        @media only screen and (max-width: 600px) {
            .btn-flotante {
                font-size: 14px;
                padding: 12px 20px;
                bottom: 20px;
                right: 20px;
            }
        } 
    </style>
  </head>
  <body>
    <header style="background-color: #94c9ee;">
        <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd00; font-size: 30px">
            <a class="navbar-brand" href="{{route('home')}}">SITECNOL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="padding-left: 60%">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('QuienesSomos')}}">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contactanos')}}">Contactanos</a>
                </li>
                </ul>
            </div>
          </nav>
          @yield('header')
    </header>


        @yield('content')
        <button type="button" class="btn btn-flotante" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-comments"></i>
        </button>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe
                        allow="microphone;"
                        width="460"
                        height="700"
                        src="https://console.dialogflow.com/api-client/demo/embedded/224afdbe-3678-4184-88a0-eec789cf6fa9">
                    </iframe>
                </div>
            </div>
            </div>
        </div>


    <footer class="text-white" style="background-color:black;">
        <div class="row">
            <div class="col-lg-4">
                <h3>Descarga nuestra App</h3>
                <p>Descarga la App android y IOS en tu Smartphone.</p>
                <div class="app-logo">
                    <img src="{{ asset('asset/play-store.png') }}" >
                    <img src="{{ asset('asset/app-store.png') }}" >
                </div>
            </div>
            <div class="col-lg-4">
                <h3>Enlaces utiles</h3>
                <ul>
                    <li>Cupones</li>
                    <li>Blogs</li>
                    <li>Unete al Afiliado </li>
                    <li>Politica de Devoluciones</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3>Redes Sociales</h3>
                <ul>
                    <li><i class="fa fa-facebook"> facebook.com</i></li>
                    <li><i class="fa fa-twitter"> twitter.com</i></li>
                    <li><i class="fa fa-instagram"> instagram.com</i></li>
                    <li><i class="fa fa-youtube"> youtube.com</i></li>
                </ul>
            </div>
        </div>
    </footer>
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    @yield('js')
  </body>
</html>