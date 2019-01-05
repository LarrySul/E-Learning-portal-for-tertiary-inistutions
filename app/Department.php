<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'deptname', 
        'hod', 
        'email', 
        'phone',
        'status', 
        'no_students',
    ];
}
