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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("picUrl");
            $table->string("genre");
            $table->string("director");
            $table->string("production");
            $table->integer("duration");
            $table->integer("price");
            $table->text("synopsis");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }

    // const CREATED_AT = 'name_of_created_at_column';
    // const UPDATED_AT = 'name_of_updated_at_column';
    // const updated_at = null;
    // public $timestamps = false;
};
