<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErroresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salidas_detectadas');
            $table->string('salidas_folio');
            $table->date('salidas_fecha');
            $table->string('salidas_descripcion');
            $table->string('salidas_cargo_det');
            $table->string('salidas_cargo_com');
            $table->string('salidas_area');
            $table->string('salidas_correcion')->nullable();
            $table->string('salidas_concesion')->nullable();
            $table->string('salidas_inf')->nullable();
            $table->string('salidas_veri');
            $table->string('salidas_seg');
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
        //
    }
}
