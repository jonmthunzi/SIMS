<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection_lists', function (Blueprint $table) {
            $table->string('regNo', 50)->primary();
            $table->string('fname');
            $table->string('sname');
            $table->string('program');
            $table->integer('entry_level');
            $table->string('academic_year');
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
        Schema::dropIfExists('selection_lists');
    }
}
