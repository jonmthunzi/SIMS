<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ca_grades', function (Blueprint $table) {
            $table->string('regNo', 50)->primary(); 
            $table->integer('course_id');
            $table->float('ca1', 8, 2);
            $table->float('ca2', 8, 2);
            $table->float('ca3', 8, 2);
            $table->float('mid_sem', 8, 2);
            $table->float('continoues_aggregate');
            $table->integer('sem_num');
            $table->string('academic_year');
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
        Schema::dropIfExists('ca_grades');
    }
}
