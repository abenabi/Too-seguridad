<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('estado_civil_id');
            $table->unsignedBigInteger('puesto_trabajo_id');
            $table->string('dui');
            $table->string('nit');
            $table->string('isss');
            $table->string('nup');
            $table->string('direccion');
            $table->unsignedBigInteger('municipio_id');
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_casa')->nullable();
            $table->timestamps();

            //laves foraneas
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete("cascade");
            $table->foreign('estado_civil_id')->references('id')->on('estado_civiles')->onDelete("cascade");
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete("cascade");
            $table->foreign('puesto_trabajo_id')->references('id')->on('puesto_trabajos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
