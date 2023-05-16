<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Location extends Model {
    use HasFactory;

    protected $guarded = [];
    protected function location(): Attribute {
        return new Attribute(
            // Mutador da formato al dato antes de ser guardado en la base de datos
            set: fn ($value) => strtoupper($value),
            // Accesor da formato al dato antes de ser mostrado en la vista
            get: fn ($value) => strtoupper($value)
        );
    }
}
