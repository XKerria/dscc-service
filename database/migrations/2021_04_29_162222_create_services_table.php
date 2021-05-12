<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('name');
            $table->string('cover', 1800)->nullable();
            $table->string('intro', 1000)->nullable();
            $table->string('image', 1800)->nullable();
            $table->unsignedInteger('priority')->default(9999);
            $table->timestamps();

            $table->string('category_id', 19)->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
