<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ElementScope;

class Prospect extends Model {

    protected $table = 'contactprospectmain';
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new ElementScope);
    }

}
