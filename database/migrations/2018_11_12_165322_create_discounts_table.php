<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('porcentaje');
            $table->string('cantidad');
            $table->timestamps();

            $table->unsignedInteger('paquete_id');
            $table->unsignedInteger('atracion_id');
            $table->unsignedInteger('actividad_id');

            $table->foreign('attraction_id')->references('id')->on('attractions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('activities_id')->references('id')->on('attractions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
        });
    }
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
