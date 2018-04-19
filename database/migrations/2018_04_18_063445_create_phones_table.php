<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('phone')->unique()->nullable();

            $table->string('sval1')->nullable();
            $table->string('sval2')->nullable();
            $table->string('sval3')->nullable();

            $table->unsignedInteger('ival1')->nullable();
            $table->unsignedInteger('ival2')->nullable();
            $table->unsignedInteger('ival3')->nullable();

            // $table->timestamp('registered_at')->nullable();
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
        Schema::dropIfExists('phones');
    }
}
