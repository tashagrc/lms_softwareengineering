<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserID');
            $table->string('UserName', 255);
            $table->string('UserEmail', 255)->unique();
            $table->string('UserPassword', 255);
            $table->integer('UserXP')->default(0);
            $table->date('UserDateJoined')->default(Carbon::now());
            $table->string('UserRole', 255)->default('Student');
            $table->unsignedBigInteger('ClassroomID')->default(0);
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
        Schema::dropIfExists('users');
    }
}
