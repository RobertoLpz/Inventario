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
            $table->increments('id');
            $table->bigInteger('id_categoria')->unsigned();
            // $table->foreignId('id_categoria')->constrained('id')->on('categorias');
            $table->string('sku');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('precio');
            $table->integer('cantidad');
            $table->enum('estado', ['Con inventario', 'Sin inventario']);
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
