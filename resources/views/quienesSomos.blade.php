@extends('layout')
@section('content')
    <div class="row py-4" style="background-color:#5a778a;">
        <div class="col-lg-6" style="padding-left: 5%">
            <img class="imagenHome" src="{{ asset('asset/perfil.jpeg') }}" alt="">
        </div>
        <div class="col-lg-6 text-white">
            <div style="padding-left: 10%; padding-right: 10%;">
                <h1 style="font-size:30px">PERFIL</h1>
                <h4>Sobre Sitecnol</h4>
                <h5>Somos una empresa que diseña aplicaciones a la medida de tu negocio...
                    desarrollamos sistemas web, aplicaciones moviles y blogs.
                    Actualmente hemos desarrollado una aplicacion "Asistente de compras" que
                    facilita a los clientes de los comercios que tienen contrato con nosotros 
                    a la hora de la compra de sus productos
                </h5>
                <br>
                <br>
                <h4>Mision</h4>
                <h5>Fortalecer a empresas e instituciones en el desarrollo de sus capacidades a través de las herramientas informáticas que nos ofrecen las nuevas tecnologías, mejorando los procesos y fortificando las capacidades de las personas, para una mejor productividad.</h5>
                <br>
                <br>
                <h4>Vision</h4>
                <h5>Brindar soluciones en tecnología informática; para contribuir al desarrollo integral de las empresas e instituciones, brindando soporte técnico eficiente y oportuno. </h5>
                <br>
                <br>
                <h4>Conocimientos</h4>
                <h5>Actualmente desarrollamos aplicaciones en los lenguajes de: <b>PHP, .NET, JAVA, JAVASCRIPT</b></h5>
                <h5>framework: <b>LARAVEL, NODEJS, FLUTTER, ANGULAR</b></h5>
            </div>
        </div>
    </div>
@endsection