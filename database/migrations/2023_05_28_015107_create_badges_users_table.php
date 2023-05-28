<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges_users', function (Blueprint $table) {
            $table->unsignedBigInteger('BadgesID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('BadgesID')->references('BadgesID')->on('badges');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->primary(['BadgesID', 'UserID']);
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
        Schema::dropIfExists('badges_users');
    }
}
