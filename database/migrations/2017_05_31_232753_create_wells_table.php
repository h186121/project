<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWellsTable extends Migration
{

    public function up()
    {
        Schema::create('wells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('well_name', 100);
            $table->string('zspo', 10);
            $table->rememberToken();
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
        Schema::dropIfExists('wells');
    }
}
