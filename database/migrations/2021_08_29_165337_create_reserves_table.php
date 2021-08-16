<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('name', 64);
            $table->string('phone', 11);
            $table->json('info')->nullable();
            $table->string('remark', 1024)->nullable();
            $table->timestamps();

            $table->string('user_id', 19);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('service_id', 19);
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->string('staff_id', 19)->nullable();
            $table->foreign('staff_id')->references('id')->on('staffs')->nullOnDelete();
            $table->string('ticket_id', 19)->nullable();
            $table->foreign('ticket_id')->references('id')->on('tickets')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
