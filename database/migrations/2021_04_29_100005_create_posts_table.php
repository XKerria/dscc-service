<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('title');
            $table->string('image', 1800)->nullable();
            $table->string('preface', 1000)->nullable();
            $table->text('text')->nullable();
            $table->text('html')->nullable();
            $table->unsignedInteger('priority')->default(9999);
            $table->string('category_id', 19)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('posts');
    }
}
