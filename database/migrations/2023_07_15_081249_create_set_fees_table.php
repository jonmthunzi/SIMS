<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_fees', function (Blueprint $table) {
            $table->id();
            $table->string('feesType');
            $table->float('amountDue');
            $table->date('dueDate');
            $table->integer('semesterNumber');
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
        Schema::dropIfExists('set_fees');
    }
}
