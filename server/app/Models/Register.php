<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [

        'course_id',
        'students_id',

    ];
}
