<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_code');
             $table->string('course_title');
             $table->string('course_credit');
             $table->integer('class_id');
            $table->integer('class_id')->unsigned(); 
            $table->timestamps();
             $table->softDeletes();
           $table->foreign('class_id')->references('id')->on('classes');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
