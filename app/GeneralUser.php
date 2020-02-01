<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralUser extends Model
{
    protected $fillable = ['name','password','email'];
}
