<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhaseFr400sTable extends Migration
{
    public function up()
    {
        Schema::create('phase_fr400s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('phase_fr400s');
    }
}
