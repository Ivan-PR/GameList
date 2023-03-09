<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Language extends Model {
    //protected $table = 'languages';
    use HasFactory;

    protected function language(): Attribute {
        return new Attribute(
            // Mutador da formato al dato antes de ser guardado en la base de datos
            set: fn ($value) => ucwords($value),
            // Accesor da formato al dato antes de ser mostrado en la vista
            get: fn ($value) => ucwords($value)
        );
    }
}
