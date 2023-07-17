<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollageGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collage_grades', function (Blueprint $table) {
            $table->bigIncrements('collage_grades_id');
            $table->integer('serial_num');
            $table->integer('regNo');
            $table->string('course_id');
            $table->float('initial', 8, 2);
            $table->float('new', 8, 2);
            $table->integer('semester');
            $table->year('year');
            $table->date('date');
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
        Schema::dropIfExists('collage_grades');
    }
}
