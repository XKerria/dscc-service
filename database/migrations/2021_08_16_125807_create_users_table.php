<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('id')->primary();
            $table->string('phone')->unique();
            $table->unsignedInteger('points')->default(0);
            $table->string('remark', 1000)->nullable();

            $table->string('openid')->unique()->nullable();
            $table->string('session_key')->nullable();
            $table->string('unionid')->nullable();

            $table->string('avatar', 1024)->nullable();
            $table->string('nickname', 64)->nullable();
            $table->string('language', 32)->nullable();
            $table->unsignedTinyInteger('gender')->default(0);
            $table->string('country', 64)->nullable();
            $table->string('province', 64)->nullable();
            $table->string('city', 64)->nullable();

            $table->string('vip_id', 19)->nullable();
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
