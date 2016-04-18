<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

//this class implements Authentication for all Users on our site
class User extends Model implements Authenticatable
{
  use \Illuminate\Auth\Authenticatable;

}
