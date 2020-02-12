<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;
class UserCustom extends Model
{
    protected $table = 'usercustom';
    protected $guarded = [];
    
        protected static function boot() {
        parent::boot();

        static::addGlobalScope(new UserScope);
    }
}
