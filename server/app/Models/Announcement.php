<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subject',
        'text',
        'instructors_id',
        'students_id',
    ];
}
