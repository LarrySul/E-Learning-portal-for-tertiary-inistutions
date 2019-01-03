<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'address', 'phone', 'dob', 'img' , 'course_id', 'department', 'description', 'gender', 'country', 'state'
    ];
}
