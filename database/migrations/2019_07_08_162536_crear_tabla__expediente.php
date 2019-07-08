<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaExpediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Expediente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telefono', 25);
            $table->double('cintura');
            $table->double('GrasaCorporal');
            $table->double('grasaviceral');
            $table->double('RM');
            $table->double('musculo');
            $table->double('estatura');
            $table->double('VMI');
            $table->date('FechaIni');
            $table->date('FechaPago');
            $table->unsignedBigInteger("alumno_id");
            $table->foreign('alumno_id')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Expediente');
    }
}
