<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ElementScope;

class Client extends Model {

    protected $table = 'contactclientmain';
    protected $guarded = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthdate1',
        'birthdate2',
        'childbirthdate1',
        'childbirthdate2',
        'childbirthdate3',
        'childbirthdate4',
    ];

    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new ElementScope);
    }

}
