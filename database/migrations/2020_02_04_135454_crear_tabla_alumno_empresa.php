<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAlumnoEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_empresa', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->unsignedBigInteger('alumno_id')->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->integer('valoracionempresa');
            $table->integer('valoracionalumno');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('empresa_id')->references('id')->on('empresas');//->onDelete('cascade');

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
        Schema::dropIfExists('alumno_empresa');
    }
}
