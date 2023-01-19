<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat', function (Blueprint $table) {
            $table->id();
            $table->string("movName");
            $table->string("time");
            $table->boolean("seat1");
            $table->boolean("seat2");
            $table->boolean("seat3");
            $table->boolean("seat4");
            $table->boolean("seat5");
            $table->boolean("seat6");
            $table->boolean("seat7");
            $table->boolean("seat8");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat');
    }
};
