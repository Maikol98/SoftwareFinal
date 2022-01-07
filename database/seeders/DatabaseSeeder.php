<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Tienda;
use App\Models\User;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $Cliente = new User();
        $Cliente->name = "maikol";
        $Cliente->email = "maikols10@gmail.com";
        $Cliente->password = bcrypt("12345678");
        $Cliente->fechaNacimiento = Carbon::now()->format('Y-m-d');
        $Cliente->celular = "75544119";
        $Cliente->rol_id = 1;
        $Cliente->save();

        $categoria = new Categoria();
        $categoria->nombre = "Peluches";
        $categoria->descripcion = "Peluches";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Bolsas";
        $categoria->descripcion = "Bolsas";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Globos";
        $categoria->descripcion = "Globos";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Herramientas";
        $categoria->descripcion = "Herramientas";
        $categoria->save();

        $tienda = new Tienda();
        $tienda->nombre = "Tienda para ti";
        $tienda->descripcion = "La tienda Para Ti les ofrece la mejor atencion que pueden imaginar, ven y compra tus relagos a aqui.";
        $tienda->horarioFin = "20:00";
        $tienda->horarioInicio = "07:00";
        $tienda->dias = "Lunes-Martes-Miercoles-Jueves-Viernes";
        $tienda->url = "https://scontent.fsrz1-2.fna.fbcdn.net/v/t39.30808-6/220545033_115468654139143_5431142507440853004_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=lH5Fh_H8_F0AX8BVCUg&_nc_ht=scontent.fsrz1-2.fna&oh=00_AT8CVvB9Y-J9Ck68YHfDpR7yKrqcDAtVlury1rozLnqJWA&oe=61DAF13B";
        $tienda->save();

        $tienda = new Tienda();
        $tienda->nombre = "Tienda QUE DETALLES";
        $tienda->descripcion = "Que Detalles tu tienda de regalos online flores, peluches, chocolates, globos, más servicio de entrega a domicilio.";
        $tienda->horarioFin = "20:00";
        $tienda->horarioInicio = "07:00";
        $tienda->dias = "Lunes-Martes-Miercoles-Jueves-Viernes";
        $tienda->url = "https://scontent.fsrz1-2.fna.fbcdn.net/v/t1.18169-9/25660295_195955937625195_1218906575396393378_n.png?_nc_cat=109&ccb=1-5&_nc_sid=e3f864&_nc_ohc=MO1SoHc36B0AX_1YosZ&_nc_ht=scontent.fsrz1-2.fna&oh=00_AT_97LPX5g3SQOkL7o_udxu05rfJpodzUNB2Cfe8Bd-Mrg&oe=61FCC880";
        $tienda->save();
        
        $tienda = new Tienda();
        $tienda->nombre = "Tienda la morita";
        $tienda->descripcion = "La tienda Morita les ofrece la mejor atencion que pueden imaginar, ven y compra tus relagos a aqui.";
        $tienda->horarioFin = "20:00";
        $tienda->horarioInicio = "07:00";
        $tienda->dias = "Lunes-Martes-Miercoles-Jueves-Viernes";
        $tienda->url = "https://www.namesnack.com/images/namesnack-giftshop-3600x2400-20211011.jpeg?crop=21:16,smart&width=420&dpr=2";
        $tienda->save();

        $producto = new Producto();
        $producto->nombre = "peluche gatito";
        $producto->descripcion = "Adorable peluche de gatito color blanco con un moño";
        $producto->precio = 80;
        $producto->stock = 10;
        $producto->img = "https://cdn.shopify.com/s/files/1/0483/9230/6849/products/peluche-gato-blanco_1600x.jpg?v=1607831881";
        $producto->categoria_id = 1;
        $producto->tienda_id = 1;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "peluche perrito";
        $producto->descripcion = "Adorable peluche de un perrito pastor aleman, ideal para tus hijos.";
        $producto->precio = 80;
        $producto->stock = 20;
        $producto->img = "https://http2.mlstatic.com/D_NQ_NP_750978-MLM44829868378_022021-O.webp";
        $producto->categoria_id = 1;
        $producto->tienda_id = 1;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "bolsa de regalo";
        $producto->descripcion = "Bolsa de regalo color azul marino.";
        $producto->precio = 20;
        $producto->stock = 5;
        $producto->img = "https://www.regalopublicidad.com/images/iz259/86bf7bfe6b68f3374f6809512d10/610-460/bolsa-de-regalo-de-pvc-resistente-azul.jpg";
        $producto->categoria_id = 2;
        $producto->tienda_id = 2;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "Globos";
        $producto->descripcion = "Hermosos globos de regalos especiales para cumpleaños.";
        $producto->precio = 30;
        $producto->stock = 3;
        $producto->img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuXAeYuuB7hgT9Gz9c1EL-N4NIPMCijz7ZZA&usqp=CAU";
        $producto->categoria_id = 3;
        $producto->tienda_id = 1;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "peluche Sonic";
        $producto->descripcion = "Peluche de Sonic de tamaño compacto.";
        $producto->precio = 50;
        $producto->stock = 2;
        $producto->img = "https://adamantiumstore.com/wp-content/uploads/peluche_sonic_adamantium.jpeg";
        $producto->categoria_id = 1;
        $producto->tienda_id = 2;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "peluche oso";
        $producto->descripcion = "Adorable peluche de un oso, ideal para tus hijos.";
        $producto->precio = 100;
        $producto->stock = 0;
        $producto->img = "https://www.buildabear.cl/wp-content/uploads/2020/12/22055.jpg";
        $producto->categoria_id = 1;
        $producto->tienda_id = 2;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "peluche gatito siames";
        $producto->descripcion = "Adorable peluche de un gatito siames, ideal para tus hijos.";
        $producto->precio = 80;
        $producto->stock = 0;
        $producto->img = "https://cdn.shopify.com/s/files/1/0483/9230/6849/products/gato-peluche-raza_600x.jpg?v=1607837676";
        $producto->categoria_id = 1;
        $producto->tienda_id = 1;
        $producto->save();

        $producto = new Producto();
        $producto->nombre = "multimetro";
        $producto->descripcion = "Ideal para medir las cosas.";
        $producto->precio = 50;
        $producto->stock = 3;
        $producto->img = "https://i14.psgsm.net/tb.com/p/891501/480/digital-multimeter-accta-at-290.jpg";
        $producto->categoria_id = 4;
        $producto->tienda_id = 3;
        $producto->save();
    }
}
