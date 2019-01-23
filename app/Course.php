<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id',   
        'csname', 
        'cscode',  
        'status',
        'description', 
        'level',
        'deptid', 
        'lectid',
        'url'  
    ];
}
