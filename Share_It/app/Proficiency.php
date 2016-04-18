<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'skill_id', 'proficiency'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function skill() {
        return $this->hasOne('App\Skill', 'skill_id', 'skill_id');
    }
}
