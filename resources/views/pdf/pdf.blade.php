
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMPROBANTE</title>

    <head>
        <style>
          <strong i="7">@page</strong> { margin: 100px 25px; }
            header{ 
                position: fixed; 
                top: 0px; 
                left: 0px; 
                right: 0px; 
                height: 50px; 
                display: block;
            }
            body {
                margin-top: 4cm;
                margin-bottom: 1cm;
            }
            footer{ 
                position: fixed; 
                bottom: 0px; 
                left: 0px; 
                right: 0px; 
                height: 30px; 
            }
            h1{
                font-size: 20px;
                text-align: center;
            }
            table, th, td {
                width: 100%;
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
      </head>
      <body>
        <header>
            <table>
                <thead>
                    <tr>
                        <th rowspan="2"><img src="{{$tienda->url}}" style="width: 90px; height: 90px"></th>
                        <th><h1>COMPROBANTE</h1></th>
                        <th rowspan="2"><img src="{{$tienda->url}}" style="width: 90px; height: 90px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h1 style="text-transform: uppercase">{{$tienda->nombre}}</h1></td>
                    </tr>
                    {{-- <tr>
                        <td><span><b>&nbsp;Código: </b>MP-ADP-951-03</span></td>
                        <td><span><b>&nbsp;Rev. </b>2, &nbsp;&nbsp;&nbsp; <b>Fecha: </b>26/01/2012&nbsp;</span></td>
                    </tr> --}}
                </tbody>
            </table>
        </header>
        <footer>
            <hr>
            <div style="text-align:center">
                <span>{{$tienda->descripcion}}</span>
            </div>
        </footer>
        <main>
            <table>
                <tr>
                    <th>COMPRA DE PRODUCTOS</th>
                </tr>
            </table>
            <table style="padding-top: 8px">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center">DATOS PERSONALES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Nombre Comprador: </th>
                        <td>{{$cliente->name}}</td>
                    </tr>
                    <tr>
                        <th>Email : </th>
                        <td>{{$cliente->email}}</td>
                    </tr>
                    <tr>
                        <th>Celular: </th>
                        <td>{{$cliente->celular}}</td>
                    </tr>
                </tbody>
            </table>

            <table style="padding-top: 8px">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center">DATOS COMPRA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Codigo: </th>
                        <td>{{$newOrden->id}}</td>
                    </tr>
                    <tr>
                        <th>Fecha: </th>
                        <td>{{$newOrden->fechapedido}}</td>
                    </tr>
                    <tr>
                        <th>Producto: </th>
                        <td>{{$product->nombre}}</td>
                    </tr>
                    <tr>
                        <th>Cantidad: </th>
                        <td>{{$detalle->cantidad}}</td>
                    </tr>
                    <tr>
                        <th>Precio: </th>
                        <td>{{$detalle->subtotal}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <div style="text-align: center;">
                <img src="https://latam.kaspersky.com/content/es-mx/images/repository/isc/2020/9910/a-guide-to-qr-codes-and-how-to-scan-qr-codes-2.png" width="400px" height="400px">
            </div>
        </main>
    </body>
</html>