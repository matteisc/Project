<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'subject', 'content'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
