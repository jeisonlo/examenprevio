<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_vehiculo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();

            $table->foreign('persona_id')
            ->references('id')->on('personas')
            ->onDelete('set null');

            $table->foreign('vehiculo_id')
            ->references('id')->on('vehiculos')
            ->onDelete('set null');



            
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
        Schema::dropIfExists('persona_vehiculo');
    }
}
