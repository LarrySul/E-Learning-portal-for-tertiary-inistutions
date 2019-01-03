<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'gender', 'matric', 'faculty', 'department' , 'email', 'password', 'phone'
    ];
}
