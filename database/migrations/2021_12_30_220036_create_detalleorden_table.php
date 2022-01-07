<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleordenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleorden', function (Blueprint $table) {
            $table->integer('orden_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->double('subtotal');
            $table->integer('cantidad');
            $table->primary(['orden_id','producto_id']);
            $table->foreign('orden_id')->references('id')->on('orden');
            $table->foreign('producto_id')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleorden');
    }
}
