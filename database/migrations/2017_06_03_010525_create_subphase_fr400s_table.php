<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubphaseFr400sTable extends Migration
{

    public function up()
    {
        Schema::create('subphase_fr400s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->timestamps();
            //foreign
            $table->string('phase_fr400s_id')->signed();
            $table->foreign('phase_fr400s_id')->references('id')->on('phase_fr400s');

            $table->string('status_id')->signed();
            $table->foreign('status_id')->references('id')->on('status');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subphase_fr400s');
    }
}
