<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionPlansTable extends Migration
{

    public function up()
    {
        Schema::create('action_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->date('e_date');

            //foreign
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status');

            $table->integer('cpis_id')->unsigned();
            $table->foreign('cpis_id')->references('id')->on('cpis');
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
        Schema::dropIfExists('action_plans');
    }
}
