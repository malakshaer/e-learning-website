<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Teach extends Model
{
    use HasFactory;

    protected $fillable = [

        'course_id',
        'instructs_id',

    ];
}
