<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('id');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('dob');
            $table->string('course');
            $table->integer('year');
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->integer('campus');
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
        Schema::dropIfExists('students');
    }
}
