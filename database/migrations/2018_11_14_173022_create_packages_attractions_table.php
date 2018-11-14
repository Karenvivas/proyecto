<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages_attractions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('packages_id');
            $table->unsignedInteger('attractions_id');

            $table->foreign('packages_id')->references('id')->on('packages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('attractions_id')->references('id')->on('attractions')
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
        Schema::dropIfExists('packages_attractions');
    }
}
