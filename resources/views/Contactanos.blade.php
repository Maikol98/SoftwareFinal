@extends('layout')
@section('content')
    <div class="row py-4" style="background-color:#33383b;">
        <div class="col-lg-6" style="padding-left: 5%">
            <div id="map-canvas" class="mapa" style="width: 100%; height: 600px;"></div>
        </div>
        <div class="col-lg-6 text-white">
            <div style="padding-left: 10%; padding-right: 10%;">
                <h1 style="font-size:30px">CONTACTANOS</h1>
                <h4>Necesitas desarrolladores para tu negocio?  Contactanos...</h4>
                <form action="{{route('Contactanos.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text text-white required" style="background-color:rgb(71, 71, 71); border: 1px solid rgba(0, 0, 0, 0)">Nombre</span>
                            <input type="text" name="name" class="form-control text-white" placeholder="Nombre"style="background-color:rgb(100, 100, 100); border: 1px solid rgba(0, 0, 0, 0)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text text-white required" style="background-color:rgb(71, 71, 71); border: 1px solid rgba(0, 0, 0, 0)">Email</span>
                            <input type="email" name="email" class="form-control text-white" placeholder="Email"style="background-color:rgb(100, 100, 100); border: 1px solid rgba(0, 0, 0, 0)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text text-white required" style="background-color:rgb(71, 71, 71); border: 1px solid rgba(0, 0, 0, 0);">Telefono</span>
                            <input type="text" name="telefono" class="form-control text-white" placeholder="Telefono"style="background-color:rgb(100, 100, 100); border: 1px solid rgba(0, 0, 0, 0);">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text text-white required" style="background-color:rgb(71, 71, 71); border: 1px solid rgba(0, 0, 0, 0)">Empresa</span>
                            <input type="text" name="empresa" class="form-control text-white" placeholder="Empresa"style="background-color:rgb(100, 100, 100); border: 1px solid rgba(0, 0, 0, 0)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text text-white required" style="background-color:rgb(71, 71, 71); border: 1px solid rgba(0, 0, 0, 0)">Mensaje</span>
                            <textarea name="content" id=""  rows="5"class="form-control text-white" placeholder="Nombre"style="background-color:rgb(100, 100, 100); border: 1px solid rgba(0, 0, 0, 0)"></textarea>
                        </div>
                    </div>
                    <div class="col col-lg-6 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD61XJZbxHDlLWATXSGIAX3c7OTgh5dgH4&callback=initMap&libraries=drawing&v=weekly"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script>
    var marc = {lat: -17.852100, lng: -63.161876};
    function initializeMap() {
        var latitud = -17.852100; 
        var longitud = -63.161876;

        var coordenadas = {
            lng : longitud,
            lat : latitud
        }
    
        generarMapa(coordenadas);
    }




    function generarMapa(coordenadas) {
        var mapa = new google.maps.Map(document.getElementById("map-canvas"),{
            center : new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
            streetViewControl: false,
            mapTypeControl: false,
            zoom : 15,
        });


        marcador = new google.maps.Marker({position: marc, map: mapa});

        // google.maps.event.addListener(mapa, 'click', function(event) {
            
        //     // Add a node to map
        //     marcador = new google.maps.Marker({position: event.latLng, map: mapa,
        //     draggable : true,});
        //     marcador.addListener('click', function(event) {
        //         document.getElementById("latitud").value = this.getPosition().lat();
        //         document.getElementById("longitud").value = this.getPosition().lng();
        //     });
                    
        // });
    }
    
    google.maps.event.addDomListener(window, 'load', initializeMap);
</script>
@endsection