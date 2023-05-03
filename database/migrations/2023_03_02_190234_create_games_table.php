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
            $table->string('name',50);
            $table->string('image',150)->nullable();
            $table->foreignId('platform_id')->nullable()->constrained('platforms');
            $table->string('publisher',50);
            $table->foreignId('location_id')->constrained('locations');
            $table->foreignId('language_id')->constrained('languages');
            $table->string('sourcerom',40);
            $table->foreignId('romsize_id')->constrained('romsizes');
            $table->string('savetype',15);
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
