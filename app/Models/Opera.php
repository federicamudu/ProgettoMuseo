<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opera extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author',
        'year',
        'description',
        'category',
        'period',
        'pic'
    ];
}
