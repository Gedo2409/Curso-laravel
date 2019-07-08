<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Nombre',25);
            $table->integer('edad');
            $table->string('username', 25);
            $table->string('Contraseña', 25);
           



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
        Schema::dropIfExists('administrador');
    }
}
