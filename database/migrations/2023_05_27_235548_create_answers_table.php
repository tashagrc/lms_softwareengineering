<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id('AnswerID');
            $table->string('AnswerMainTopic', 255);
            $table->string('AnswerPurpose', 255);
            $table->string('AnswerConclusion', 255);
            $table->unsignedBigInteger('QuizID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('QuizID')->references('QuizID')->on('quizzes');
            $table->foreign('UserID')->references('UserID')->on('users');
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
        Schema::dropIfExists('answers');
    }
}
