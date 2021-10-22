<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->integer('weight')->nullable();

            $table->timestamps();
        });
    }
        // id - unsigned big integer, AUTOINCREMENT, PRIMARY KEY
        // image_id - unsigned big integer, nullable
        // owner_id - unsigned big integer, nullable
        // name - string, nullable
        // species - string, nullable
        // breed - string, nullable
        // age - integer, nullable
        // weight - integer, nullable
        // created_at - datetime, nullable
        // updated_at - datetime, nullable

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
