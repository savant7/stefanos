<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class Contact extends Model {

    protected $table = 'contactcontactmain';
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new UserScope);
    }

}
