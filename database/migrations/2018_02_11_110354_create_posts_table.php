<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('title');
          $table->string('url')->unique()->nullable();

          $table->string('salary')->nullable();
          $table->text('address')->nullable();
          $table->string('photo')->nullable();
          $table->string('phone')->nullable();
          $table->string('email')->nullable();

          $table->text('excerpt')->nullable();
          $table->mediumText('iframe')->nullable();
          $table->mediumText('body')->nullable();

          $table->unsignedInteger('category_id')->nullable();
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('days')->nullable();

          $table->timestamp('published_at')->nullable();
          $table->timestamp('hide_at')->nullable();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
