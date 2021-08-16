<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('title', 32);
            $table->string('type', 32);
            $table->unsignedInteger('value');
            $table->unsignedInteger('expire')->nullable();
            $table->enum('expire_unit', ['minute', 'hour', 'day', 'week', 'month', 'quarter', 'year'])->nullable();
            $table->string('remark', 32)->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
