<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->unsignedBigInteger('friend_id')->index();
            $table->tinyInteger('status')->default('0');
            $table->unsignedBigInteger('user_id')->index();

            $table->foreign('friend_id')->references('id')->on('users')->opDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->opDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
};
