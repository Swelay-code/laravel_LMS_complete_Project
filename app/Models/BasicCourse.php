<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'video',
        'coverimg',
        'title',
        'description',
        'price',
        'rating',
        'status',
    ];
}
