<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_attractions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('activities_id');
            $table->unsignedInteger('attractions_id');

            $table->foreign('activities_id')->references('id')->on('activities')
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
        Schema::dropIfExists('activities_attractions');
    }
}
