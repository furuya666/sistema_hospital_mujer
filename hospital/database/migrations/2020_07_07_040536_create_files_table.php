<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned();
            $table->string('certificado_estudio');
            $table->string('certificado_trabajo');
            $table->string('certificado_contraloria');
            $table->string('certificado_nacimiento');
            $table->string('certificado_matrimonio');
            $table->string('certificado_antecedentes_policiales');
            $table->string('memorandum_designacion');
            $table->string('contrato_trabajo');
            $table->string('acciones_personal');
            $table->string('solicitud_vacaiones');
            $table->string('solicitud_permiso');
            $table->string('evaluacion_confirmacion');
            $table->string('evaluacion_desempeño');
            $table->string('acta_seleccion');
            $table->string('años_servicio');
            $table->string('servicio_militar');
            $table->string('carnet_identidad');
            $table->string('fotografia');
            $table->string('pdf');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
