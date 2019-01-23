<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'deptid',
        'deptname', 
        'hod', 
        'email', 
        'no_courses',
        'status', 
        'no_students',
    ];
}
