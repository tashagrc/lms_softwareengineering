<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id('ResourceID');
            $table->string('ResourceTitle', 255);
            $table->string('ResourceLink', 255);
            $table->unsignedBigInteger('SessionID');
            $table->unsignedBigInteger('CourseID');
            $table->foreign('SessionID')->references('SessionID')->on('sessions');
            $table->foreign('CourseID')->references('CourseID')->on('courses');
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
        Schema::dropIfExists('resources');
    }
}
