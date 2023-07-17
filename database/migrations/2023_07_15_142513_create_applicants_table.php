<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('applicant_id');
            $table->integer('user_id');
            $table->string('qualification');
            $table->string('description');
            $table->string('sec_name');
            $table->string('sec_district');
            $table->string('sec_country');
            $table->year('year_obtained');
            $table->integer('english');
            $table->integer('chemistry');
            $table->integer('mathematics');
            $table->integer('physics');
            $table->integer('agriculture');
            $table->integer('biology');
            $table->integer('bible_knowledge');
            $table->integer('geography');
            $table->integer('chichewa');
            $table->integer('life_skills');
            $table->integer('social_studies');
            $table->integer('computer_studies');
            $table->integer('business_studies');
            $table->integer('technical_drawing');
            $table->integer('home_economics');
            $table->string('other_certificate');
            $table->string('certificate_copy');
            $table->string('examination_body');
            $table->string('examination_number');
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('third_choice');
            $table->string('sponsor_fname');
            $table->string('sponsor_lname');
            $table->string('sponsor_initial');
            $table->string('sponsor_contact');
            $table->string('relationship');
            $table->string('status');
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
        Schema::dropIfExists('applicants');
    }
}
