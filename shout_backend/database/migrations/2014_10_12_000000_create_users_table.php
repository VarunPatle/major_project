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
        Schema::create('users', function (Blueprint $table) {
            $table->id('userId');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('dob')->format('d/m/Y');
            $table->string('password');
            $table->string('gender');
            $table->string('phone');
            $table->string('city');
            $table->timestamp('updated_at')->nullable();
            $table->timestamps('created_at')->nullable();

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
};
