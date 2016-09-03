<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_code',10);
             $table->string('course_title',50);
             $table->string('course_credit');
               $table->integer('class_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('class_id')->references('class_id')->on('classes');

         //   $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}
