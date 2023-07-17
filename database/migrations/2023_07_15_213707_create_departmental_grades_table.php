<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentalGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departmental_grades', function (Blueprint $table) {
            $table->string('regNo', 50)->primary(); 
            $table->string('serial_num');
            $table->integer('course_id');
            $table->float('continues_aggregate', 8, 2);
            $table->float('endsem_exam_score', 8, 2);
            $table->float('endsem_grade', 8, 2);
            $table->integer('sem_num');
            $table->string('academic_year');
            $table->string('status');
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
        Schema::dropIfExists('departmental_grades');
    }
}
