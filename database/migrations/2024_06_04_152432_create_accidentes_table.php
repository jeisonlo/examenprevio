<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidentes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->time('hora');
            $table->date('fecha');
            $table->string('lugar');
            $table->unsignedBigInteger('persona_id')->nullable();
           
            $table->foreign('persona_id')
            ->references('id')->on('personas')
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
        Schema::dropIfExists('accidentes');
    }
}
