<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolSizesTable extends Migration
{

    public function up()
    {
        Schema::create('tool_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 100);
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
        Schema::dropIfExists('tool_sizes');
    }
}
