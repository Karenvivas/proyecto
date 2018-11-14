<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('asunto');
            $table->string('correo');
            $table->string('informacion');
            $table->timestamps();

            $table->unsignedInteger('usuario_id');

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
          
            $table->unsignedInteger('atracciones_id');

            $table->foreign('atracciones_id')->references('id')->on('attractions')
            ->onDelete('cascade');
            
            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registries');
    }
}
