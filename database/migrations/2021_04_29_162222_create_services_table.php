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
            $table->string('intro', 1000)->nullable();
            $table->string('tip')->nullable();
            $table->string('staff_type')->nullable();
            $table->string('partner_type')->nullable();
            $table->text('content')->nullable();
            $table->json('prices')->nullable();
            $table->json('items')->nullable();
            $table->unsignedInteger('priority')->default(9999);

            $table->string('icon_url', 1024)->nullable();
            $table->string('video_url', 1024)->nullable();

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
