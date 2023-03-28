<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Game extends Model
{
    // protected $table = 'games';
    use HasFactory;

    // los campos que se guardaran del objeto en la base de datos
    // protected $fillable = ['image','id_game','name','location_id','publisher','sourcerom','savetype','romsize_id','language_id_id','platform_id'];
    
    //todos los campos que haya dentro de guarded se obviaran
    // en el momento de guardar el objeto en la base de datos.
    protected $guarded=[];

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function publisher(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function sourcerom(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function savetype(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }
}
