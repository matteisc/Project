<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function proficiencies() {
        return $this->hasMany('App\Proficiency', 'user_id', 'id');
    }

    public function messages() {
        return $this->hasMany('App\Message', 'user_id', 'id');
    }

    public function tickets() {
        return $this->hasMany('App\Ticket', 'user_id', 'id');
    }
}
