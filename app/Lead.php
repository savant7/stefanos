<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ElementScope;

class Lead extends Model {

    protected $table = 'contactleadmain';
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new ElementScope);
    }

}
