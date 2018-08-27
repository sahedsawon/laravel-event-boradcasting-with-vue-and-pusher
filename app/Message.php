<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected  $fillable = [
        'user_id',
        'message',
        'created_at',
        'updated_at'
    ];
    
//    public function users() {
//        return $this->hasOne(User::class);
//    }
    
    public function getUserIdAttribute($value)
    {
        return User::findOrFail($value)->name;
    }
}
