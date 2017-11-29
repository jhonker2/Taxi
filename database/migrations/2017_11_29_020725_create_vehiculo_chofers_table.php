<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculoChofersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_chofers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehiculo_id')->unsigned();
            $table->string('chofer_id');
            $table->string('estado');
            $table->timestamp('fecha_inicial')->nullable();
            $table->timestamp('fecha_final')->nullable();
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
        Schema::dropIfExists('vehiculo_chofers');
    }
}
