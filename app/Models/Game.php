<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Game extends Model {
    use HasFactory;

    //Todos los atributos que haya dentro de guarded se obviaran en el momento de guardar el objeto en la base de datos.
    protected $guarded = [];

    public function platform() {
        return $this->belongsTo(Platform::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function romsize() {
        return $this->belongsTo(Romsize::class);
    }

    protected function name(): Attribute {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function publisher(): Attribute {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function sourcerom(): Attribute {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }

    protected function savetype(): Attribute {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => ucwords($value)
        );
    }
}
