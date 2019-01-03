<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'csname', 
        'csdate', 
        'csduration', 
        'csprice',
        'description', 
        'level',
        'deptid', 
        'lectid' 
    ];
}
