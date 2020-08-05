<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notification\Notifale;

class Admin extends Authenticable
{
    
    protected $fillable =['username','nama','password','level'];
}
