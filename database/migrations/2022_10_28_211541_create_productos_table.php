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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('p_nombre')->nullable(FALSE)->comment('Nombre del producto');
            $table->string('p_referencia')->nullable(FALSE)->comment('Referencia del producto');
            $table->unsignedInteger('p_precio')->nullable(FALSE)->default(1)->comment('Valor del producto');
            $table->unsignedInteger('p_peso')->nullable(FALSE)->default(1)->comment('peso de producto');
            $table->string('p_categoria')->nullable(FALSE)->comment('Nombre de la categoria del producto');
            $table->unsignedInteger('p_stock')->nullable(FALSE)->default(1)->comment('cantidad de producto en stock');
            $table->unsignedInteger('p_estado')->nullable(FALSE)->default(1)->comment('estado del producto');
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
        Schema::dropIfExists('productos');
    }
};
