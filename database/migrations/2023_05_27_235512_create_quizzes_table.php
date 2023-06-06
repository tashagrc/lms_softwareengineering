<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id('QuizID');
            $table->string('QuizTitle', 255);
            $table->string('QuizArticle', 1000);
            $table->date('QuizDate');
            $table->timestamp('QuizStart')->nullable();
            $table->timestamp('QuizEnd')->nullable();
            $table->string('QuizPrepare', 255)->nullable();
            $table->unsignedBigInteger('SessionID');
            $table->unsignedBigInteger('CourseID');
            $table->unsignedBigInteger('ClassroomID');
            $table->foreign('SessionID')->references('SessionID')->on('sessions');
            $table->foreign('CourseID')->references('CourseID')->on('courses');
            $table->foreign('ClassroomID')->references('ClassroomID')->on('classrooms');
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
        Schema::dropIfExists('quizzes');
    }
}
