<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEosGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eos_grades', function (Blueprint $table) {
         
            $table->string('regNo', 50)->primary(); 
            $table->integer('course_id');
            $table->float('endsem_exam_score', 8, 2);
            $table->integer('sem_num');
            $table->string('academic_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eos_grades');
    }
}
