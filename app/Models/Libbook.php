<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'bookupload',
        'description',
        'coverimg',
        'remarks',
        'rating',
        'status',
    ];
}
