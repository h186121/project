<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('run_number', 100);
            $table->timestamps();

            //foreign
            $table->integer('wells_id')->unsigned();
            $table->foreign('wells_id')->references('id')->on('wells');

            $table->integer('phase_wells_id')->unsigned();
            $table->foreign('phase_wells_id')->references('id')->on('phase_wells');

            $table->integer('tool_sizes_id')->unsigned();
            $table->foreign('tool_sizes_id')->references('id')->on('tool_sizes');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runs');
    }
}
