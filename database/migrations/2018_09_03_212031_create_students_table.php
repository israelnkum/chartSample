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
            $table->increments('id');
            $table->string('name');
            $table->string('indexNo');
            $table->string('studentNo');
            $table->string('program');
            $table->string('level');
            $table->string('gender');
            $table->string('age');
            $table->string('phone');
            $table->string('nationality');
            $table->string('yearBill');
            $table->string('owings');
            $table->string('password');
            $table->string('yearAdmitted');
            $table->string('yearGroup');
            $table->string('qualityAssurance');
            $table->string('status');

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
