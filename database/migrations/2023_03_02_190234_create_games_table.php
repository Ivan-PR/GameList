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
            $table->string('id_game')->unique();
            $table->string('name',170);
            $table->string('image',150)->nullable();
            $table->foreignId('platform_id')->nullable()->constrained('platforms');
            $table->string('publisher',50)->nullable();
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->foreignId('language_id')->nullable()->constrained('languages');
            $table->string('sourcerom',40)->nullable();
            $table->foreignId('romsize_id')->nullable()->constrained('romsizes');
            $table->string('savetype',15)->nullable();
            $table->timestamps();

// https://laracasts.com/discuss/channels/laravel/sqlstatehy000-general-error-3780-referencing-column-lang-id-and-referenced-column-id

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
