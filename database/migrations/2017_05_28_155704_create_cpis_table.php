<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('number_cpi', 100);
            $table->text('description');
            $table->boolean('s_i');
            $table->boolean('tff');
            $table->float('npt', 8, 2);
            $table->date('s_date');
            $table->date('e_date');

            //foreign
            $table->integer('runs_id')->unsigned();
            $table->foreign('runs_id')->references('id')->on('runs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpis');
    }
}
