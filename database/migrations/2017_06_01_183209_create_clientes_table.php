<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objetivo');
            $table->string('nombre_indicador');
            $table->string('descripcion_indicador');
            $table->string('valor_actual');
            $table->string('meta_cortop');
            $table->string('meta_medianop');
            $table->string('meta_largop');
            $table->string('proceso_medir');
            $table->string('frecuencia');
            $table->string('fuente_datos');
            $table->string('R_calculo');
            $table->string('R_calculo1')->nullable();
            $table->string('R_calculo2')->nullable();
            $table->string('R_calculo3')->nullable();
            $table->string('R_analisis');
            $table->string('R_analisis1')->nullable();
            $table->string('R_analisis2')->nullable();
            $table->string('R_analisis3')->nullable();
            $table->string('R_acciones');
            $table->string('R_acciones1')->nullable();
            $table->string('R_acciones2')->nullable();
            $table->string('R_acciones3')->nullable();
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
      Schema::drop('clientes');
    }
}
