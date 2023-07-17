<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('regNo', 50)->primary();
            $table->integer('user_id');
            $table->integer('applicant_id');
            $table->integer('cohort_id');
            $table->integer('prog_id');
            $table->integer('semester');
            $table->integer('level');
            $table->string('village');
            $table->string('residential');
            $table->string('qualification');
            $table->integer('room_id');
            $table->string('spouse_name');
            $table->string('spouse_phone');
            $table->string('spouse_email');
            $table->string('entry_type');
            $table->year('entry_year');
            $table->date('admission_date');
            $table->date('first_reg_date');
            $table->date('expected_comp_date');
            $table->string('disability');
            $table->string('disability_type');
            $table->timestamp('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
