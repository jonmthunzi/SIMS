<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutemapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routemaps', function (Blueprint $table) {
            $table->bigIncrements('routemap_id');
            $table->integer('course_id');
            $table->string('course_name');
            $table->integer('semester');
            $table->integer('level');
            $table->integer('program_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routemaps');
    }
}
