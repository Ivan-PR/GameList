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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('image',150);
            $table->bigInteger('platform_id');
            $table->string('publisher',50);
            $table->bigInteger('location_id');
            $table->bigInteger('language_id');
            $table->string('sourcerom',15);
            $table->bigInteger('romsize_id');
            $table->string('savetype',10);
            $table->timestamps();

// https://laracasts.com/discuss/channels/laravel/sqlstatehy000-general-error-3780-referencing-column-lang-id-and-referenced-column-id

            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('restrict');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('restrict');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('restrict');
            $table->foreign('romsize_id')->references('id')->on('romsizes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
