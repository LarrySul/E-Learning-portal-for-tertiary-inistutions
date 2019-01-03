<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->increments('lect_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('address');
            $table->string('phone')->unique();
            $table->date('dob');
            $table->string('img');
            $table->unsignedInteger('course_id');
            $table->string('department');
            $table->text('description');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
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
        Schema::dropIfExists('lecturers');
    }
}
