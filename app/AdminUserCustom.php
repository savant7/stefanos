<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;
class AdminUserCustom extends Model
{
    protected $table = 'adminusercustom';
    protected $guarded = [];
    
        protected static function boot() {
        parent::boot();

        static::addGlobalScope(new UserScope);
    }
}
