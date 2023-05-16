<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('language', 200); //max 255 caracteres.
            $table->timestamps();
        });

        DB::table('languages')->insert([
            [
                'id' => '1',
                'language' => 'French'
            ],
            [
                'id' => '2',
                'language' => 'English'
            ],
            [
                'id' => '3',
                'language' => 'Sin Idioma'
            ],
            [
                'id' => '4',
                'language' => 'Chinese'
            ],
            [
                'id' => '8',
                'language' => 'Danish'
            ],
            [
                'id' => '16',
                'language' => 'Dutch'
            ],
            [
                'id' => '32',
                'language' => 'Finland'
            ],
            [
                'id' => '64',
                'language' => 'German'
            ],
            [
                'id' => '128',
                'language' => 'Italian'
            ],
            [
                'id' => '256',
                'language' => 'Japanese'
            ],
            [
                'id' => '512',
                'language' => 'Norwegian'
            ],
            [
                'id' => '1024',
                'language' => 'Polish'
            ],
            [
                'id' => '2048',
                'language' => 'Portuguese'
            ],
            [
                'id' => '4096',
                'language' => 'Spanish'
            ],
            [
                'id' => '8192',
                'language' => 'Swedish'
            ],
            [
                'id' => '16384',
                'language' => 'English'
            ],
            [
                'id' => '32768',
                'language' => 'Portuguese'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('languages');
    }
};
