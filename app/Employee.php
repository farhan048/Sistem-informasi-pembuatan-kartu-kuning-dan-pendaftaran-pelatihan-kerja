<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nip', 'nama', 'alamat', 'golongan', 'jabatan', 'email', 'no_ponsel', 'foto'];
}
