<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre', 30);
            $table->integer('Edad');
            $table->string('NombreUsuario',30);
            $table->string('contraseña', 35);
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
        Schema::dropIfExists('usuario');
    }
}
