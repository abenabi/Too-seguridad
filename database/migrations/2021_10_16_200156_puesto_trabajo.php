<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuestoTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto_trabajos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('salario',8,2);
            $table->unsignedBigInteger('seccion_departamento_id');
            $table->timestamps();

            //laves foraneas
            $table->foreign('seccion_departamento_id')->references('id')->on('seccion_departamentos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puesto_trabajo');
    }
}
