<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('ClassroomID');
            $table->unsignedBigInteger('CourseID');
            $table->integer('ClassProgress')->nullable();
            $table->foreign('ClassroomID')->references('ClassroomID')->on('classrooms');
            $table->foreign('CourseID')->references('CourseID')->on('courses');
            $table->primary(['ClassroomID', 'CourseID']);
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
        Schema::dropIfExists('classroom_courses');
    }
}
