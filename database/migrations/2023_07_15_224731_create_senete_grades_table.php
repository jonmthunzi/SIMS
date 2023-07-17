<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeneteGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senete_grades', function (Blueprint $table) {
            $table->bigIncrements('senete_grades_id');
            $table->integer('serial_num');
            $table->string('regNo');
            $table->string('course_id');
            $table->float('collage_grade', 8, 2);
            $table->float('new_grade', 8, 2);
            $table->integer('semester');
            $table->year('year');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senete_grades');
    }
}
