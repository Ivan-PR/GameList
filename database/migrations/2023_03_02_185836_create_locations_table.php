<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location',30);//max 255 caracteres.
            $table->string('image',150)->nullable();
            $table->timestamps();
        });
        
        DB::table('locations')->insert([
            [
                'id'=>'1',
                'location'=>'Europe',
                'image'=>'europe.png'
            ],
            [
                'id'=>'2',
                'location'=>'USA',
                'image'=>'usa.png'
            ],
            [
                'id'=>'3',
                'location'=>'Germany',
                'image'=>'germany.png'
            ],
            [
                'id'=>'4',
                'location'=>'China',
                'image'=>'china.png'
            ],
            [
                'id'=>'5',
                'location'=>'Spain',
                'image'=>'spain.png'
            ],
            [
                'id'=>'6',
                'location'=>'France',
                'image'=>'france.png'
            ],
            [
                'id'=>'7',
                'location'=>'Italy',
                'image'=>'italy.png'
            ],
            [
                'id'=>'8',
                'location'=>'Japan',
                'image'=>'japan.png'
            ],
            [
                'id'=>'9',
                'location'=>'Nederland',
                'image'=>'nederland.png'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
?>