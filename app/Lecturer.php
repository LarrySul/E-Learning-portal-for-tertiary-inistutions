<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
    'id', 'fullname', 'address', 'mobileno', 'dob', 'img', 'department', 'description', 'gender', 'country', 'state'
    ];
}
