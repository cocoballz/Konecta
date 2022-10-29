<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto')->nullable(0)->comment('referencia a producto');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->unsignedInteger('v_cantidad')->nullable(FALSE)->default(1)->comment('Cantidad de producto');
            $table->string('v_comentario')->nullable(0)->comment('observacion producto');
            $table->unsignedInteger('v_estado')->nullable(FALSE)->default(1)->comment('estado del pedido detalle');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
