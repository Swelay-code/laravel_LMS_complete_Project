<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'gender',
        'guardian',
        'phoneno',
        'course',
        'profileimg',
        'email',
        'password',
    ];
}
