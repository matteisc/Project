<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['from_user_id', 'user_id', 'content'];

    public function user_from() {
        return $this->hasOne('App\User', 'id', 'from_user_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
