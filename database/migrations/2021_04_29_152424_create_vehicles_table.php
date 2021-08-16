<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('name');
            $table->string('image_url', 1024);
            $table->string('logo_url', 1024);
            $table->unsignedDecimal('day_price', 9, 2)->default(0);
            $table->unsignedDecimal('km_price', 9, 2)->default(0);
            $table->string('remark', 1024)->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
